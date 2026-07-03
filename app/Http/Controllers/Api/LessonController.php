<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;

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


public function lessonsBySlug($slug)
{
    $course = Course::where('slug', $slug)->firstOrFail();

    $lessons = Lesson::where('course_id', $course->id)
        ->orderBy('order')
        ->get();

    return response()->json([
        'success' => true,
        'data' => [
            'course' => $course,
            'lessons' => $lessons
        ]
    ]);
}


}
