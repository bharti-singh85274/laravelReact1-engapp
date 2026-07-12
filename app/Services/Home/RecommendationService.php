<?php

namespace App\Services\Home;

use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Lesson;

class RecommendationService
{
    public function getRecommendations($user)
    {
        $courses = Course::where('is_active', true)
            ->orderBy('display_order')
            ->get();

        return $courses->map(function ($course) use ($user) {

            $progress = CourseProgress::where(
                'user_id',
                $user->id
            )
            ->where(
                'course_id',
                $course->id
            )
            ->first();

            return [

                'id' => $course->id,

                'title' => $course->title,

                'slug' => $course->slug,

                'thumbnail' => $course->thumbnail,

                'difficulty' => $course->difficulty,

                'reason' => $this->getReason($course),

                'progress' => $progress
                    ? $progress->progress_percentage
                    : 0,

                'completed_lessons' => $progress
                    ? $progress->completed_lessons
                    : 0,

                'total_lessons' => $progress
                    ? $progress->total_lessons
                    : Lesson::where(
                        'course_id',
                        $course->id
                    )->count(),

                'status' => $progress
                    ? $progress->status
                    : 'not_started',

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