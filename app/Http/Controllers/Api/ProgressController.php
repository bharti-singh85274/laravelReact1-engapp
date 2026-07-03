<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProgress;

class ProgressController extends Controller
{
    
  
// public function complete(Request $request)
// {
//     $progress = UserProgress::updateOrCreate(
//         [
//             'user_id' => $request->user()->id,
//             'lesson_id' => $request->lesson_id,
//         ],
//         [
//             'completed' => true
//         ]
//     );

//     return response()->json([
//         'message' => 'Lesson completed',
//         'data' => $progress
//     ]);
// }


public function complete(Request $request)
{
    $request->validate([
        'lesson_id' => 'required|exists:lessons,id'
    ]);

    $progress = UserProgress::updateOrCreate(

        [
            'user_id' => $request->user()->id,
            'lesson_id' => $request->lesson_id,
        ],

        [
            'completed' => true,
        ]
    );

    return response()->json([

        'success' => true,

        'message' => 'Lesson completed.',

        'data' => $progress

    ]);
}


// public function progress(Request $request)
// {
//     return UserProgress::where('user_id', $request->user()->id)->get();
// }



// public function progress(Request $request)
// {
//     $completedLessons = UserProgress::where(
//         'user_id',
//         $request->user()->id
//     )
//     ->where('completed', true)
//     ->pluck('lesson_id');

//     $totalLessons = \App\Models\Lesson::count();

//     $completedCount = $completedLessons->count();

//     return response()->json([

//         'success' => true,

//         'completed_lessons' => $completedLessons,

//         'completed_count' => $completedCount,

//         'total_lessons' => $totalLessons,

//         'percentage' => $totalLessons
//             ? round(($completedCount / $totalLessons) * 100)
//             : 0,

//         'xp' => $completedCount * 20

//     ]);
// }




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
        "xp" => $completedCount * 20
    ]);
}

}
