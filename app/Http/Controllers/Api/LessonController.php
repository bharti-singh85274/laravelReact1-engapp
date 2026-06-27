<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    
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


}
