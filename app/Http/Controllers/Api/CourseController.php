<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Lesson;
use App\Models\UserProgress;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Get all courses with user progress
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $query = Course::where('is_active', true);

        // Filter by level
        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter premium/free
        if ($request->has('is_premium')) {
            $query->where('is_premium', $request->is_premium);
        }

        $courses = $query
            ->orderBy('display_order')
            ->get();

        $courses->transform(function ($course) use ($user) {

            $progress = CourseProgress::where('user_id', $user->id)
                ->where('course_id', $course->id)
                ->first();

            $course->progress = [

                'completed_lessons' => $progress?->completed_lessons ?? 0,

                // Always calculate from lessons table
                'total_lessons' => $course->lessons()->count(),

                'percentage' => $progress?->progress_percentage ?? 0,

                'status' => $progress?->status ?? 'not_started',

            ];

            return $course;
        });

        return response()->json([
            'success' => true,
            'total' => $courses->count(),
            'data' => $courses,
        ]);
    }

 

    public function show(Request $request, $slug)
    {
        $user = $request->user();

        $course = Course::with('lessons')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $completedLessons = \App\Models\UserProgress::where(
                'user_id',
                $user->id
            )
            ->where('completed', true)
            ->pluck('lesson_id')
            ->toArray();

        $course->lessons->transform(function ($lesson) use ($completedLessons) {

            $lesson->completed = in_array(
                $lesson->id,
                $completedLessons
            );

            return $lesson;

        });

        return response()->json([

            'success' => true,

            'data' => $course

        ]);
    }



    /**
     * Continue Learning
     */
    public function continueLearning(Request $request)
    {
        $user = $request->user();

       $progress = CourseProgress::where('user_id', $user->id)
            ->latest('updated_at')
            ->first();

        // First time user
        if (!$progress) {

            $course = Course::where('is_active', true)
                ->orderBy('display_order')
                ->first();

            if (!$course) {

                return response()->json([
                    'success' => false,
                    'message' => 'No courses available.'
                ], 404);
            }

            $lesson = Lesson::where('course_id', $course->id)
                ->orderBy('order')
                ->first();

            return response()->json([

                'success' => true,

                'is_new_user' => true,

                'data' => [

                    'course' => $course,

                    'current_lesson' => $lesson,

                    'next_lesson' => $lesson,

                    'progress' => [

                        'completed_lessons' => 0,

                        'total_lessons' => $course->lessons()->count(),

                        'percentage' => 0

                    ]

                ]

            ]);
        }

        $course = Course::find($progress->course_id);

       $currentLesson = Lesson::where('course_id', $course->id)
    ->orderBy('order')
    ->first();

        $nextLesson = null;

        if ($currentLesson) {

            $nextLesson = Lesson::where('course_id', $course->id)
                ->where('order', '>', $currentLesson->order)
                ->orderBy('order')
                ->first();
        }

        return response()->json([

            'success' => true,

            'is_new_user' => false,

            'data' => [

                'course' => $course,

                'current_lesson' => $currentLesson,

                'next_lesson' => $nextLesson,

                'progress' => [

                    'completed_lessons' => $progress->completed_lessons,

                    // Always calculate from lessons table
                    'total_lessons' => $course->lessons()->count(),

                   'percentage' => $progress->progress_percentage

                ]

            ]

        ]);
    }

    /**
     * Search Courses
     */
    public function search(Request $request)
    {
        $keyword = trim($request->keyword);

        if (!$keyword) {

            return response()->json([
                'success' => false,
                'message' => 'Keyword is required.'
            ], 422);
        }

        $courses = Course::select(
            'id',
            'title',
            'slug',
            'thumbnail',
            'short_description',
            'level',
            'category',
            'lessons_count',
            'duration',
            'rating',
            'students_count',
            'xp_reward',
            'theme_color',
            'is_premium'
        )
            ->where('is_active', true)
            ->where(function ($query) use ($keyword) {

                $query->where('title', 'LIKE', "%{$keyword}%")
                    ->orWhere('description', 'LIKE', "%{$keyword}%")
                    ->orWhere('short_description', 'LIKE', "%{$keyword}%")
                    ->orWhere('category', 'LIKE', "%{$keyword}%")
                    ->orWhere('level', 'LIKE', "%{$keyword}%");

            })
            ->orderBy('display_order')
            ->get();

        return response()->json([

            'success' => true,

            'keyword' => $keyword,

            'total_results' => $courses->count(),

            'data' => $courses

        ]);
    }


   public function details(Request $request, $id)
{
    $user = $request->user();

    /*
    |--------------------------------------------------------------------------
    | Course
    |--------------------------------------------------------------------------
    */

    $course = Course::findOrFail($id);

    /*
    |--------------------------------------------------------------------------
    | Lessons
    |--------------------------------------------------------------------------
    */

    $lessons = Lesson::where('course_id', $course->id)
        ->orderBy('order')
        ->get();

    /*
    |--------------------------------------------------------------------------
    | Completed Lessons
    |--------------------------------------------------------------------------
    */

    $completedLessonIds = UserProgress::where(
            'user_id',
            $user->id
        )
        ->where('completed', true)
        ->pluck('lesson_id')
        ->toArray();

    /*
    |--------------------------------------------------------------------------
    | Lock Lessons
    |--------------------------------------------------------------------------
    */

    foreach ($lessons as $index => $lesson) {

        $lesson->completed = in_array(
            $lesson->id,
            $completedLessonIds
        );

        if ($index == 0) {

            $lesson->locked = false;

        } else {

            $previousLesson = $lessons[$index - 1];

            $lesson->locked = !in_array(
                $previousLesson->id,
                $completedLessonIds
            );
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Course Progress
    |--------------------------------------------------------------------------
    */

    $progress = CourseProgress::where(
            'user_id',
            $user->id
        )
        ->where('course_id', $course->id)
        ->first();

    /*
    |--------------------------------------------------------------------------
    | Next Lesson
    |--------------------------------------------------------------------------
    */

    $nextLesson = $lessons
        ->firstWhere('completed', false);

    /*
    |--------------------------------------------------------------------------
    | Response
    |--------------------------------------------------------------------------
    */

    return response()->json([

        'success' => true,

        'data' => [

            'course' => $course,

            'progress' => [

                'completed_lessons' =>
                    $progress->completed_lessons ?? 0,

                'total_lessons' =>
                    $progress->total_lessons
                    ?? $lessons->count(),

                'progress_percentage' =>
                    $progress->progress_percentage ?? 0,

                'status' =>
                    $progress->status
                    ?? 'not_started'

            ],

            'next_lesson' => $nextLesson,

            'lessons' => $lessons

        ]

    ]);
}

}