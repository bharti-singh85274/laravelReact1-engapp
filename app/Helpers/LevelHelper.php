<?php

namespace App\Helpers;

class LevelHelper
{
    /**
     * Calculate user level based on XP.
     */
    public static function getLevel(int $xp): array
    {
        $levels = [
            1 => 0,
            2 => 200,
            3 => 500,
            4 => 900,
            5 => 1400,
            6 => 2000,
            7 => 2700,
            8 => 3500,
            9 => 4400,
            10 => 5500,
        ];

        $level = 1;
        $nextLevelXP = 200;

        foreach ($levels as $lvl => $requiredXP) {
            if ($xp >= $requiredXP) {
                $level = $lvl;
            }
        }

        $keys = array_keys($levels);

        foreach ($keys as $index => $lvl) {

            if ($lvl == $level) {

                if (isset($keys[$index + 1])) {

                    $nextLevelXP = $levels[$keys[$index + 1]];

                } else {

                    $nextLevelXP = $levels[$level];
                }

                break;
            }
        }

        return [
            'level' => $level,
            'next_level_xp' => $nextLevelXP,
        ];
    }
}