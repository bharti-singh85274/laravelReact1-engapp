<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProgress;

class ProgressController extends Controller
{
    
  
public function complete(Request $request)
{
    $progress = UserProgress::updateOrCreate(
        [
            'user_id' => $request->user()->id,
            'lesson_id' => $request->lesson_id,
        ],
        [
            'completed' => true
        ]
    );

    return response()->json([
        'message' => 'Lesson completed',
        'data' => $progress
    ]);
}


public function progress(Request $request)
{
    return UserProgress::where('user_id', $request->user()->id)->get();
}


}
