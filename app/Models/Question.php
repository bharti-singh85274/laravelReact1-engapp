<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [

        'lesson_id',

        'question',

        'options',

        'correct_answer',

        'explanation',

    ];

    protected $casts = [

        'options' => 'array'

    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function quizAnswers()
    {
        return $this->hasMany(QuizAnswer::class);
    }


}