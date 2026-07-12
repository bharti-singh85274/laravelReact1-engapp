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

                    $courseProgress = CourseProgress::where(
                        'user_id',
                        $user->id
                    )
                    ->where(
                        'course_id',
                        $course->id
                    )
                    ->first();

                    return [

                        'course' => [

                            'id' => $course->id,

                            'title' => $course->title,

                            'slug' => $course->slug,

                            'thumbnail' => $course->thumbnail,

                        ],

                        'lesson' => [

                            'id' => $lesson->id,

                            'title' => $lesson->title,

                        ],

                        'progress' => $courseProgress
                            ? $courseProgress->progress_percentage
                            : 0,

                        'completed_lessons' => $courseProgress
                            ? $courseProgress->completed_lessons
                            : 0,

                        'total_lessons' => $courseProgress
                            ? $courseProgress->total_lessons
                            : $lessons->count(),

                        'status' => $courseProgress
                            ? $courseProgress->status
                            : 'not_started',

                    ];
                }
            }
        }

        return null;
    }
}