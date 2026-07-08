<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\UserStreak;
use App\Models\XpHistory;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();



        $streak = UserStreak::firstWhere(

            'user_id',

            $user->id

        );

        $totalXp = XpHistory::where(

            'user_id',

            $user->id

        )->sum('xp');

        /*
        |--------------------------------------------------------------------------
        | Completed Lessons
        |--------------------------------------------------------------------------
        */

        $completedLessons = UserProgress::where(
            'user_id',
            $user->id
        )
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
        | Overall Progress
        |--------------------------------------------------------------------------
        */

        $progress = $totalLessons > 0
            ? round(($completedLessons / $totalLessons) * 100)
            : 0;

        /*
        |--------------------------------------------------------------------------
        | Total XP Earned
        |--------------------------------------------------------------------------
        */

        $xp = UserProgress::where(
            'user_id',
            $user->id
        )->sum('xp');

        /*
        |--------------------------------------------------------------------------
        | Completed Courses
        |--------------------------------------------------------------------------
        */

       $completedCourses = CourseProgress::where(
            'user_id',
            $user->id
        )
        ->where('completed', true)
        ->count();

       

        /*
|--------------------------------------------------------------------------
| Continue Learning (Next Unlocked Lesson)
|--------------------------------------------------------------------------
*/

$continueLearning = null;

/*
|--------------------------------------------------------------------------
| Get Courses In Order
|--------------------------------------------------------------------------
*/

$courses = Course::where('is_active', true)
    ->orderBy('display_order')
    ->get();

foreach ($courses as $course) {

    /*
    |--------------------------------------------------------------------------
    | Get Lessons
    |--------------------------------------------------------------------------
    */

    $lessons = Lesson::where(
        'course_id',
        $course->id
    )
    ->orderBy('order')
    ->get();

    foreach ($lessons as $lesson) {

        /*
        |--------------------------------------------------------------------------
        | Already Completed?
        |--------------------------------------------------------------------------
        */

        $completed = UserProgress::where(
            'user_id',
            $user->id
        )
        ->where(
            'lesson_id',
            $lesson->id
        )
        ->where(
            'completed',
            true
        )
        ->exists();

        /*
        |--------------------------------------------------------------------------
        | First Uncompleted Lesson
        |--------------------------------------------------------------------------
        */

        if (!$completed) {

            $courseProgress = CourseProgress::where(
                'user_id',
                $user->id
            )
            ->where(
                'course_id',
                $course->id
            )
            ->first();

            $continueLearning = [

                'course_id' => $course->id,

                'course_title' => $course->title,

                'lesson_id' => $lesson->id,

                'lesson_title' => $lesson->title,

                'progress' => $courseProgress
                    ? $courseProgress->progress_percentage
                    : 0

            ];

            break 2;
        }
    }
}



        /*
        |--------------------------------------------------------------------------
        | Featured Courses
        |--------------------------------------------------------------------------
        */

        $featuredCourses = Course::where('is_active', true)
            ->orderBy('display_order')
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Response
        |--------------------------------------------------------------------------
        */

        return response()->json([

            'success' => true,

            'data' => [

                'user' => [

                    'name' => $user->name,

                    'email' => $user->email

                ],

                'stats' => [

                    'completed_courses' => $completedCourses,

                    'completed_lessons' => $completedLessons,

                    'total_lessons' => $totalLessons,

                    'progress' => $progress,

                    'xp' => $xp

                ],

              'continue_learning' => $continueLearning,

                'featured_courses' => $featuredCourses,

                'stats'=>[

                    'xp'=>$totalXp,

                    'current_streak'=>$streak->current_streak ?? 0,

                    'longest_streak'=>$streak->longest_streak ?? 0

                ],

            ]

        ]);
    }
}