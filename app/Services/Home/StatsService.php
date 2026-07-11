<?php

namespace App\Services\Home;

use App\Models\Lesson;
use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\UserStreak;
use App\Models\XpHistory;

class StatsService
{
    public function getStats($user): array
    {
        /*
        |--------------------------------------------------------------------------
        | User Streak
        |--------------------------------------------------------------------------
        */

        $streak = UserStreak::where('user_id', $user->id)->first();

        /*
        |--------------------------------------------------------------------------
        | Total XP
        |--------------------------------------------------------------------------
        */

        $totalXp = XpHistory::where('user_id', $user->id)
            ->sum('xp');

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
        | Overall Progress
        |--------------------------------------------------------------------------
        */

        $progress = $totalLessons > 0
            ? round(($completedLessons / $totalLessons) * 100)
            : 0;

        /*
        |--------------------------------------------------------------------------
        | Completed Courses
        |--------------------------------------------------------------------------
        */

        $completedCourses = CourseProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->count();

        return [

            'completed_courses' => $completedCourses,

            'completed_lessons' => $completedLessons,

            'total_lessons' => $totalLessons,

            'progress' => $progress,

            'xp' => $totalXp,

            'current_streak' => $streak->current_streak ?? 0,

            'longest_streak' => $streak->longest_streak ?? 0,

        ];
    }
}