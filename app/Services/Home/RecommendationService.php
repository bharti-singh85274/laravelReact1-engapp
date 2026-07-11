<?php

namespace App\Services\Home;

use App\Models\Course;
use App\Models\CourseProgress;

class RecommendationService
{
    public function getRecommendations($user)
    {
        $completedCourseIds = CourseProgress::where('user_id', $user->id)
            ->where('completed', true)
            ->pluck('course_id');

        $courses = Course::where('is_active', true)
            ->whereNotIn('id', $completedCourseIds)
            ->orderBy('display_order')
            ->take(5)
            ->get();

        return $courses->map(function ($course) {

            return [

                'id' => $course->id,

                'title' => $course->title,

                'slug' => $course->slug,

                'thumbnail' => $course->thumbnail,

                'difficulty' => $course->difficulty,

                'reason' => $this->getReason($course)

            ];

        })->values();
    }

    private function getReason($course): string
    {
        switch ($course->slug) {

            case 'basic-english':
                return 'Perfect for beginners';

            case 'daily-conversation':
                return 'Practice real-life conversations';

            case 'grammar-basics':
                return 'Build strong grammar fundamentals';

            case 'english-tenses':
                return 'Master English tenses';

            case 'vocabulary-builder':
                return 'Expand your vocabulary';

            case 'idioms-and-phrases':
                return 'Speak more naturally';

            case 'business-english':
                return 'Improve workplace communication';

            default:
                return 'Recommended for you';
        }
    }
}