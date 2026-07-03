<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserProgress;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        /*
        |--------------------------------------------------------------------------
        | Completed Lessons
        |--------------------------------------------------------------------------
        */

        $completedLessons = UserProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->count();

        /*
        |--------------------------------------------------------------------------
        | Total Lessons
        |--------------------------------------------------------------------------
        */

        $totalLessons = Lesson::count();

        /*
        |--------------------------------------------------------------------------
        | Progress
        |--------------------------------------------------------------------------
        */

        $progress = $totalLessons > 0
            ? round(($completedLessons / $totalLessons) * 100)
            : 0;

        /*
        |--------------------------------------------------------------------------
        | XP
        |--------------------------------------------------------------------------
        */

        $xp = $completedLessons * 20;

        /*
        |--------------------------------------------------------------------------
        | Continue Learning
        |--------------------------------------------------------------------------
        */

        $continueLearning = UserProgress::with('lesson.course')
            ->where('user_id', $user->id)
            ->latest()
            ->first();

        /*
        |--------------------------------------------------------------------------
        | Featured Courses
        |--------------------------------------------------------------------------
        */

        $featuredCourses = Course::where('is_active', true)
            ->orderBy('display_order')
            ->take(5)
            ->get();

        return response()->json([

            'success' => true,

            'data' => [

                'user' => [

                    'name' => $user->name,

                    'email' => $user->email

                ],

                'stats' => [

                    'completed_lessons' => $completedLessons,

                    'total_lessons' => $totalLessons,

                    'progress' => $progress,

                    'xp' => $xp

                ],

                'continue_learning' => $continueLearning
                ? [

                    'course_id' => $continueLearning->lesson->course->id,

                    'course_title' => $continueLearning->lesson->course->title,

                    'lesson_id' => $continueLearning->lesson->id,

                    'lesson_title' => $continueLearning->lesson->title,

                ]
                : null,

                'featured_courses' => $featuredCourses

            ]

        ]);
    }
}