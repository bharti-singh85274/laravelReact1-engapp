<?php

namespace App\Services\Home;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserProgress;
use App\Models\CourseProgress;

class ContinueLearningService
{
    public function getContinueLearning($user): ?array
    {
        $courses = Course::where('is_active', true)
            ->orderBy('display_order')
            ->get();

        foreach ($courses as $course) {

            $lessons = Lesson::where('course_id', $course->id)
                ->orderBy('order')
                ->get();

            foreach ($lessons as $lesson) {

                $completed = UserProgress::where('user_id', $user->id)
                    ->where('lesson_id', $lesson->id)
                    ->where('completed', true)
                    ->exists();

                if (!$completed) {

                    $courseProgress = CourseProgress::where('user_id', $user->id)
                        ->where('course_id', $course->id)
                        ->first();

                    return [

                        'course_id' => $course->id,

                        'course_title' => $course->title,

                        'lesson_id' => $lesson->id,

                        'lesson_title' => $lesson->title,

                        'progress' => $courseProgress
                            ? $courseProgress->progress_percentage
                            : 0

                    ];
                }
            }
        }

        return null;
    }
}