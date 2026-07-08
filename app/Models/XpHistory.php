<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XpHistory extends Model
{
    protected $fillable = [

        'user_id',

        'lesson_id',

        'xp',

        'reason'

    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}