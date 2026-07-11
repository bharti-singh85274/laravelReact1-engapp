<?php

namespace App\Services\Home;

use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\UserStreak;
use App\Models\XpHistory;

class AchievementService
{
    public function getAchievements($user): array
    {
        $completedLessons = UserProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->count();

        $completedCourses = CourseProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->count();

        $xp = XpHistory::where('user_id', $user->id)
            ->sum('xp');

        $streak = UserStreak::where('user_id', $user->id)
            ->first();

        $currentStreak = $streak->current_streak ?? 0;

        $achievements = [];

        /*
        |--------------------------------------------------------------------------
        | First Lesson
        |--------------------------------------------------------------------------
        */

        $achievements[] = [

            'key' => 'first_lesson',

            'title' => 'First Lesson',

            'description' => 'Complete your first lesson.',

            'completed' => $completedLessons >= 1,

            'icon' => 'book'
        ];

        /*
        |--------------------------------------------------------------------------
        | 10 Lessons
        |--------------------------------------------------------------------------
        */

        $achievements[] = [

            'key' => 'lesson_master',

            'title' => 'Lesson Master',

            'description' => 'Complete 10 lessons.',

            'completed' => $completedLessons >= 10,

            'icon' => 'school'
        ];

        /*
        |--------------------------------------------------------------------------
        | First Course
        |--------------------------------------------------------------------------
        */

        $achievements[] = [

            'key' => 'first_course',

            'title' => 'Course Completed',

            'description' => 'Finish your first course.',

            'completed' => $completedCourses >= 1,

            'icon' => 'graduation-cap'
        ];

        /*
        |--------------------------------------------------------------------------
        | 100 XP
        |--------------------------------------------------------------------------
        */

        $achievements[] = [

            'key' => 'xp_100',

            'title' => '100 XP Club',

            'description' => 'Earn 100 XP.',

            'completed' => $xp >= 100,

            'icon' => 'star'
        ];

        /*
        |--------------------------------------------------------------------------
        | 7 Day Streak
        |--------------------------------------------------------------------------
        */

        $achievements[] = [

            'key' => 'week_streak',

            'title' => '7 Day Streak',

            'description' => 'Study for 7 consecutive days.',

            'completed' => $currentStreak >= 7,

            'icon' => 'fire'
        ];

        return $achievements;
    }
}