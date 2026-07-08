<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\UserProgress;

class LessonController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Lessons By Course Id
    |--------------------------------------------------------------------------
    */

    public function lessons(Request $request, $id)
    {
        $user = $request->user();

        $lessons = Lesson::where('course_id', $id)
            ->orderBy('order')
            ->get();

        // $completed = UserProgress::where(
        //     'user_id',
        //     $user->id
        // )
        // ->where('completed', true)
        // ->pluck('lesson_id')
        // ->toArray();

        // $lessons->transform(function ($lesson) use ($completed) {

        //     $lesson->completed = in_array(
        //         $lesson->id,
        //         $completed
        //     );

        //     return $lesson;
        // });

        $completed = UserProgress::where(
    'user_id',
    $user->id
)
->where('completed', true)
->pluck('lesson_id')
->toArray();

$lessons->transform(function ($lesson) use ($lessons, $completed) {

    /*
    |--------------------------------------------------------------------------
    | Lesson Completed
    |--------------------------------------------------------------------------
    */

    $lesson->completed = in_array(
        $lesson->id,
        $completed
    );

    /*
    |--------------------------------------------------------------------------
    | Lesson Locked
    |--------------------------------------------------------------------------
    */

    // First lesson is always unlocked
    if ($lesson->order == 1) {

        $lesson->locked = false;

    } else {

        // Find previous lesson using order
        $previousLesson = $lessons
            ->where('order', $lesson->order - 1)
            ->first();

        if (!$previousLesson) {

            $lesson->locked = false;

        } else {

            $lesson->locked = !in_array(
                $previousLesson->id,
                $completed
            );

        }

    }

    return $lesson;
});

        return response()->json([
            'success' => true,
            'data' => $lessons
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Single Lesson
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        return response()->json([

            'success' => true,

            'data' => Lesson::findOrFail($id)

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Lessons By Course Slug
    |--------------------------------------------------------------------------
    */

    public function lessonsBySlug(Request $request, $slug)
    {
        $user = $request->user();

        $course = Course::where('slug', $slug)
            ->firstOrFail();

        $lessons = Lesson::where(
            'course_id',
            $course->id
        )
        ->orderBy('order')
        ->get();

        // $completed = UserProgress::where(
        //     'user_id',
        //     $user->id
        // )
        // ->where('completed', true)
        // ->pluck('lesson_id')
        // ->toArray();

        // $lessons->transform(function ($lesson) use ($completed) {

        //     $lesson->completed = in_array(
        //         $lesson->id,
        //         $completed
        //     );

        //     return $lesson;
        // });


        $completed = UserProgress::where(
    'user_id',
    $user->id
)
->where('completed', true)
->pluck('lesson_id')
->toArray();

$lessons->transform(function ($lesson) use ($lessons, $completed) {

    /*
    |--------------------------------------------------------------------------
    | Lesson Completed
    |--------------------------------------------------------------------------
    */

    $lesson->completed = in_array(
        $lesson->id,
        $completed
    );

    /*
    |--------------------------------------------------------------------------
    | Lesson Locked
    |--------------------------------------------------------------------------
    */

    // First lesson is always unlocked
    if ($lesson->order == 1) {

        $lesson->locked = false;

    } else {

        // Find previous lesson based on lesson order
        $previousLesson = $lessons
            ->where('order', $lesson->order - 1)
            ->first();

        if (!$previousLesson) {

            // Safety fallback
            $lesson->locked = false;

        } else {

            $lesson->locked = !in_array(
                $previousLesson->id,
                $completed
            );

        }

    }

    return $lesson;
});

        
        return response()->json([

            'success' => true,

            'data' => [

                'course' => $course,

                'lessons' => $lessons

            ]

        ]);
    }
}