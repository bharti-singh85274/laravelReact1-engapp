<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'title' => $this->title,

            'slug' => $this->slug,

            'thumbnail' => $this->thumbnail
                ? asset('storage/'.$this->thumbnail)
                : null,

            'short_description' => $this->short_description,

            'description' => $this->description,

            'level' => $this->level,

            'category' => $this->category,

            'lessons_count' => $this->lessons_count,

            'duration' => $this->duration,

            'rating' => (float) $this->rating,

            'students_count' => $this->students_count,

            'xp_reward' => $this->xp_reward,

            'theme_color' => $this->theme_color,

            'is_premium' => $this->is_premium,

            'display_order' => $this->display_order,
        ];
    }


public function index()
{
    $courses = Course::where('is_active', true)
        ->orderBy('display_order')
        ->get();

    return response()->json([
        'success' => true,
        'message' => 'Courses fetched successfully.',
        'data' => CourseResource::collection($courses),
    ]);
}


public function show($slug)
{
    $course = Course::where('slug', $slug)
        ->where('is_active', true)
        ->firstOrFail();

    return response()->json([
        'success' => true,
        'data' => new CourseResource($course),
    ]);
}




}