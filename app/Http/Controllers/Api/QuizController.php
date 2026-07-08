<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\Lesson;
use App\Models\XpHistory;
use App\Models\UserStreak;

class QuizController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Get Quiz Questions
    |--------------------------------------------------------------------------
    */

    public function quiz($id)
    {
        $questions = Question::where(
            'lesson_id',
            $id
        )->get();

        return response()->json([

            'success' => true,

            'data' => $questions

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Submit Quiz
    |--------------------------------------------------------------------------
    */

    public function submit(Request $request)
    {
        $request->validate([

            'lesson_id' => 'required|exists:lessons,id',

            'answers' => 'required|array'

        ]);

        $user = $request->user();

        $lesson = Lesson::findOrFail(
            $request->lesson_id
        );

        $questions = Question::where(
            'lesson_id',
            $lesson->id
        )->get();

        $correct = 0;

        foreach ($questions as $question) {

            $answer = $request->answers[$question->id] ?? null;

            if ($answer == $question->correct_answer) {

                $correct++;

            }
        }

        $total = $questions->count();

        $wrong = $total - $correct;

        $percentage = $total > 0
            ? round(($correct / $total) * 100)
            : 0;

        $passed = $percentage >= 60;

        $xp = $correct * 5;

        /*
        |--------------------------------------------------------------------------
        | Save Quiz Result
        |--------------------------------------------------------------------------
        */

        QuizResult::create([

            'user_id' => $user->id,

            'lesson_id' => $lesson->id,

            'total_questions' => $total,

            'correct_answers' => $correct,

            'wrong_answers' => $wrong,

            'percentage' => $percentage,

            'passed' => $passed,

            'xp_earned' => $xp

        ]);

        $courseProgress = null;


                /*
        |--------------------------------------------------------------------------
        | Update Progress Only If Quiz Passed
        |--------------------------------------------------------------------------
        */

        if ($passed) {

            /*
            |--------------------------------------------------------------------------
            | Check if lesson already completed
            |--------------------------------------------------------------------------
            */

            $alreadyCompleted = UserProgress::where(

                'user_id',
                $user->id

            )
            ->where(

                'lesson_id',
                $lesson->id

            )
            ->where(

                'completed',
                true

            )
            ->exists();

            /*
            |--------------------------------------------------------------------------
            | Give XP & Update Streak
            | Only on first successful completion
            |--------------------------------------------------------------------------
            */

            if (!$alreadyCompleted) {

                /*
                |--------------------------------------------------------------------------
                | XP History
                |--------------------------------------------------------------------------
                */

                XpHistory::create([

                    'user_id' => $user->id,

                    'lesson_id' => $lesson->id,

                    'xp' => $xp,

                    'reason' => 'Lesson Quiz Completed'

                ]);

                /*
                |--------------------------------------------------------------------------
                | User Streak
                |--------------------------------------------------------------------------
                */

                $streak = UserStreak::firstOrCreate(

                    [

                        'user_id' => $user->id

                    ]

                );

                $today = today();

                if (!$streak->last_activity_date) {

                    $streak->current_streak = 1;

                }

                elseif ($streak->last_activity_date->equalTo($today)) {

                    // Already counted today

                }

                elseif (

                    $streak->last_activity_date->equalTo(

                        $today->copy()->subDay()

                    )

                ) {

                    $streak->current_streak++;

                }

                else {

                    $streak->current_streak = 1;

                }

                $streak->last_activity_date = $today;

                if (

                    $streak->current_streak >

                    $streak->longest_streak

                ) {

                    $streak->longest_streak =

                        $streak->current_streak;

                }

                $streak->save();

            }


                        /*
            |--------------------------------------------------------------------------
            | User Progress
            |--------------------------------------------------------------------------
            */

            UserProgress::updateOrCreate(

                [

                    'user_id' => $user->id,

                    'lesson_id' => $lesson->id

                ],

                [

                    'score' => $correct,

                    'percentage' => $percentage,

                    'xp' => $xp,

                    'completed' => true,

                    'completed_at' => now()

                ]

            );

            /*
            |--------------------------------------------------------------------------
            | Course Progress Calculation
            |--------------------------------------------------------------------------
            */

            $totalLessons = Lesson::where(

                'course_id',
                $lesson->course_id

            )->count();

            $completedLessons = UserProgress::where(

                'user_id',
                $user->id

            )
            ->where(

                'completed',
                true

            )
            ->whereHas('lesson', function ($query) use ($lesson) {

                $query->where(

                    'course_id',
                    $lesson->course_id

                );

            })
            ->count();

            $progress = $totalLessons > 0
                ? round(($completedLessons / $totalLessons) * 100)
                : 0;

            /*
            |--------------------------------------------------------------------------
            | Course Progress
            |--------------------------------------------------------------------------
            */

            $courseProgress = CourseProgress::firstOrNew([

                'user_id' => $user->id,

                'course_id' => $lesson->course_id

            ]);

            /*
            |--------------------------------------------------------------------------
            | Started At
            |--------------------------------------------------------------------------
            */


            if (!$courseProgress->started_at) {

                    $courseProgress->started_at = now();

                }

         
            $courseProgress->completed_lessons = $completedLessons;

            $courseProgress->total_lessons = $totalLessons;

            $courseProgress->progress_percentage = $progress;

            $courseProgress->last_lesson_id = $lesson->id;

            $courseProgress->last_opened_at = now();

            /*
            |--------------------------------------------------------------------------
            | Course Status
            |--------------------------------------------------------------------------
            */

            
            if ($progress == 0) {

    $courseProgress->status = 'not_started';
    $courseProgress->completed = false;
    $courseProgress->completed_at = null;

}
elseif ($progress < 100) {

    $courseProgress->status = 'in_progress';
    $courseProgress->completed = false;
    $courseProgress->completed_at = null;

}
else {

    $courseProgress->status = 'completed';
    $courseProgress->completed = true;

    if (!$courseProgress->completed_at) {

        $courseProgress->completed_at = now();

    }
}

$courseProgress->save();

} // <-- end if ($passed)

    return response()->json([
        'success' => true,
        'quiz' => [
            'score' => $correct,
            'total' => $total,
            'wrong' => $wrong,
            'percentage' => $percentage,
            'passed' => $passed,
            'xp' => $xp,
        ],
        'lesson' => [
            'completed' => $passed,
        ],
        'course_progress' => $courseProgress,
    ]);


       }

             
     }

