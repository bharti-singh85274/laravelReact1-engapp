<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseProgress extends Model
{
    protected $table = 'course_progress';

    protected $fillable = [

        'user_id',

        'course_id',

        'completed_lessons',

        'total_lessons',

        'progress_percentage',

        'status',

        'last_lesson_id',

        'time_spent_seconds',

        'started_at',

        'completed_at',

        'last_opened_at'

    ];

    protected $casts = [

        'started_at' => 'datetime',

        'completed_at' => 'datetime',

        'last_opened_at' => 'datetime'

    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class,'last_lesson_id');
    }
}