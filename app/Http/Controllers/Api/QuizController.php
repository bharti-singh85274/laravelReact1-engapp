<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    
  public function quiz($id)
{
    return Question::where('lesson_id', $id)->get();
}

}
