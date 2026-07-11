<?php

namespace App\Services\Home;

use App\Models\UserProgress;
use App\Models\QuizResult;
use App\Models\CourseProgress;
use Illuminate\Support\Collection;

class ActivityService
{
    public function getRecentActivity($user): array
    {
        $activities = collect();

        /*
        |--------------------------------------------------------------------------
        | Completed Lessons
        |--------------------------------------------------------------------------
        */

        $lessons = UserProgress::with('lesson')
            ->where('user_id', $user->id)
            ->where('completed', true)
            ->latest('completed_at')
            ->take(5)
            ->get();

        foreach ($lessons as $lesson) {

            $activities->push([

                'type' => 'lesson_completed',

                'title' => $lesson->lesson->title,

                'description' => 'Lesson completed',

                'xp' => $lesson->xp,

                'time' => optional($lesson->completed_at)->diffForHumans(),

                'created_at' => $lesson->completed_at,

            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Quiz Results
        |--------------------------------------------------------------------------
        */

        $quizzes = QuizResult::with('lesson')
            ->where('user_id', $user->id)
            ->latest()
            ->take(5)
            ->get();

        foreach ($quizzes as $quiz) {

            $activities->push([

                'type' => 'quiz_completed',

                'title' => $quiz->lesson->title . ' Quiz',

                'description' => $quiz->correct_answers .
                    '/' .
                    $quiz->total_questions .
                    ' Correct',

                'xp' => $quiz->xp_earned,

                'time' => $quiz->created_at->diffForHumans(),

                'created_at' => $quiz->created_at,

            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Completed Courses
        |--------------------------------------------------------------------------
        */

        $courses = CourseProgress::with('course')
            ->where('user_id', $user->id)
            ->where('completed', true)
            ->latest('updated_at')
            ->take(5)
            ->get();

        foreach ($courses as $course) {

            $activities->push([

                'type' => 'course_completed',

                'title' => $course->course->title,

                'description' => 'Course completed',

                'xp' => null,

                'time' => $course->updated_at->diffForHumans(),

                'created_at' => $course->updated_at,

            ]);
        }

        return $activities
            ->sortByDesc('created_at')
            ->take(10)
            ->values()
            ->toArray();
    }
}