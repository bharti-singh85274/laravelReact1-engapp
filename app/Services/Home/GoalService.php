<?php


namespace App\Services\Home;

use App\Models\UserProgress;
use App\Models\XpHistory;
use Carbon\Carbon;

class GoalService
{
    const DAILY_LESSON_TARGET = 3;
    const DAILY_XP_TARGET = 50;

    public function getDailyGoal($user): array
    {
        $today = Carbon::today();

        $completedLessons = UserProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->whereDate('completed_at', $today)
            ->count();

        $earnedXp = XpHistory::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->sum('xp');

        return [

            'target_lessons' => self::DAILY_LESSON_TARGET,

            'completed_lessons' => $completedLessons,

            'remaining_lessons' => max(
                0,
                self::DAILY_LESSON_TARGET - $completedLessons
            ),

            'target_xp' => self::DAILY_XP_TARGET,

            'earned_xp' => $earnedXp,

            'remaining_xp' => max(
                0,
                self::DAILY_XP_TARGET - $earnedXp
            ),

            'completed' => (
                $completedLessons >= self::DAILY_LESSON_TARGET &&
                $earnedXp >= self::DAILY_XP_TARGET
            )

        ];
    }
}