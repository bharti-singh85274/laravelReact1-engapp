<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // public function index()
    // {
    //     $courses = Course::where('is_active', true)
    //         ->orderBy('display_order')
    //         ->get();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Courses fetched successfully.',
    //         'data' => $courses,
    //     ]);
    // }



    public function index(Request $request)
{
    $query = Course::where('is_active', true);

    // Filter by level
    if ($request->filled('level')) {
        $query->where('level', $request->level);
    }

    // Filter by category
    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    // Filter by premium/free
    if ($request->has('is_premium')) {
        $query->where('is_premium', $request->is_premium);
    }

    $courses = $query
        ->orderBy('display_order')
        ->get([
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
        ]);

    return response()->json([
        'success' => true,
        'total' => $courses->count(),
        'filters' => [
            'level' => $request->level,
            'category' => $request->category,
            'is_premium' => $request->is_premium,
        ],
        'data' => $courses,
    ]);
}


 
    public function show($slug)
    {
        $course = Course::with('lessons')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => $course,
        ]);
    }


public function continueLearning(Request $request)
{
    $user = $request->user();

    $progress = CourseProgress::where('user_id', $user->id)
        ->whereIn('status', ['in_progress', 'completed'])
        ->latest('updated_at')
        ->first();

    if (!$progress) {

        $course = Course::where('is_active', true)
            ->orderBy('display_order')
            ->first();

        if (!$course) {

            return response()->json([
                'success' => false,
                'message' => 'No courses available.'
            ],404);

        }

        $lesson = Lesson::where('course_id',$course->id)
            ->orderBy('order')
            ->first();

        return response()->json([

            'success'=>true,

            'is_new_user'=>true,

            'data'=>[

                'course'=>$course,

                'current_lesson'=>$lesson,

                'next_lesson'=>$lesson,

                'progress'=>[
                    'completed_lessons'=>0,
                    'total_lessons'=>$course->lessons()->count(),
                    'percentage'=>0
                ]

            ]

        ]);

    }

    $course = Course::find($progress->course_id);

    $currentLesson = Lesson::find($progress->last_lesson_id);

    $nextLesson = Lesson::where('course_id',$course->id)
        ->where('order','>',$currentLesson->order)
        ->orderBy('order')
        ->first();

    return response()->json([

        'success'=>true,

        'is_new_user'=>false,

        'data'=>[

            'course'=>$course,

            'current_lesson'=>$currentLesson,

            'next_lesson'=>$nextLesson,

            'progress'=>[

                'completed_lessons'=>$progress->completed_lessons,

                'total_lessons'=>$progress->total_lessons,

                'percentage'=>$progress->progress_percentage

            ]

        ]

    ]);
}


public function search(Request $request)
{
    $keyword = trim($request->keyword);

    if (!$keyword) {

        return response()->json([
            'success' => false,
            'message' => 'Keyword is required.'
        ], 422);

    }

    // $courses = Course::where('is_active', true)
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


}