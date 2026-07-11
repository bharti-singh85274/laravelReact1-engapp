<?php

namespace App\Helpers;

use Carbon\Carbon;

class GreetingHelper
{
    public static function getGreeting()
    {
        $hour = Carbon::now()->hour;

        if ($hour < 12) {

            return "Good Morning";

        } elseif ($hour < 17) {

            return "Good Afternoon";

        }

        return "Good Evening";
    }
}