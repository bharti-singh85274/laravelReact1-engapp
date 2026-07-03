<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'thumbnail',
        'short_description',
        'description',
        'level',
        'category',
        'lessons_count',
        'duration',
        'rating',
        'students_count',
        'xp_reward',
        'theme_color',
        'is_premium',
        'is_active',
        'display_order',

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {

            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }

        });
    }

  
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function progress()
{
    return $this->hasMany(CourseProgress::class);
}


}