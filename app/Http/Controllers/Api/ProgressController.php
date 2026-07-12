<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\Lesson;
use Carbon\Carbon;

class ProgressController extends Controller
{
    

public function progress(Request $request)
{
    $completedLessons = UserProgress::where(
        'user_id',
        $request->user()->id
    )
    ->where('completed', true)
    ->pluck('lesson_id');

    $totalLessons = \App\Models\Lesson::count();

    $completedCount = $completedLessons->count();

    return response()->json([
        "success" => true,
        "completed_lessons" => $completedLessons,
        "completed_count" => $completedCount,
        "total_lessons" => $totalLessons,
        "percentage" => $totalLessons > 0
            ? round(($completedCount / $totalLessons) * 100)
            : 0,
       
        "xp" => $request->user()->fresh()->xp
    ]);
}



public function continueLearning(Request $request)
{
    $progress = CourseProgress::with([
        'course',
        'lesson'
    ])
    ->where('user_id', $request->user()->id)
    ->orderByDesc('last_opened_at')
    ->first();

    if (!$progress) {

        return response()->json([

            'success' => true,

            'data' => null

        ]);

    }

    return response()->json([

        'success' => true,

        'data' => [

            'course' => $progress->course,

            'lesson' => $progress->lesson,

            'progress' => $progress->progress_percentage,

            'completed_lessons' => $progress->completed_lessons,

            'total_lessons' => $progress->total_lessons

        ]

    ]);
}


public function complete(Request $request)
{
    $request->validate([
        'lesson_id' => 'required|exists:lessons,id'
    ]);

    $lesson = Lesson::findOrFail($request->lesson_id);

    UserProgress::updateOrCreate(
        [
            'user_id' => $request->user()->id,
            'lesson_id' => $lesson->id,
        ],
        [
            'completed' => true,
        ]
    );

    $completedLessons = UserProgress::where(
        'user_id',
        $request->user()->id
    )
    ->whereHas('lesson', function ($query) use ($lesson) {
        $query->where('course_id', $lesson->course_id);
    })
    ->where('completed', true)
    ->count();

    $totalLessons = Lesson::where(
        'course_id',
        $lesson->course_id
    )->count();

    CourseProgress::updateOrCreate(

        [
            'user_id' => $request->user()->id,
            'course_id' => $lesson->course_id,
        ],

        [

            'completed_lessons' => $completedLessons,

            'total_lessons' => $totalLessons,

            'progress_percentage' => round(
                ($completedLessons / max($totalLessons,1)) * 100
            ),

            'last_lesson_id' => $lesson->id,

            'last_opened_at' => Carbon::now(),

           'status' => $completedLessons == 0
                ? 'not_started'
                : (
                    $completedLessons == $totalLessons
                        ? 'completed'
                        : 'in_progress'
                ),

            'started_at' => now(),

        ]

    );

    return response()->json([

        'success' => true,

        'message' => 'Lesson completed successfully.'

    ]);
}

}
