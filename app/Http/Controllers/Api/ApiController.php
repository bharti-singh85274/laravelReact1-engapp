<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
  public function profile(Request $request)
{
    return response()->json([
        'user' => $request->user()
    ]);
}


public function update(Request $request)
{
    $user = $request->user();

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return response()->json([
        'message' => 'Profile updated',
        'user' => $user
    ]);
}


public function index()
{
    return Course::all();
}

public function show($id)
{
    return Course::findOrFail($id);
}


public function lessons($id)
{
    return Lesson::where('course_id', $id)
        ->orderBy('order')
        ->get();
}


public function show($id)
{
    return Lesson::findOrFail($id);
}


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


public function quiz($id)
{
    return Question::where('lesson_id', $id)->get();
}

}
