<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\UserProgress;
use App\Models\CourseProgress;
use App\Models\Lesson;

class QuizController extends Controller
{
    /**
     * Get quiz questions of a lesson
     */
    public function quiz($id)
    {
        $questions = Question::where('lesson_id', $id)->get();

        return response()->json([
            'success' => true,
            'data' => $questions
        ]);
    }

    /**
     * Submit Quiz
     */
    public function submit(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'answers'   => 'required|array'
        ]);

        $user = $request->user();

        $lesson = Lesson::findOrFail($request->lesson_id);

        $questions = Question::where('lesson_id', $lesson->id)->get();

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

            UserProgress::updateOrCreate(

                [
                    'user_id' => $user->id,
                    'lesson_id' => $lesson->id
                ],

                [
                    'completed' => true
                ]

            );

            $totalLessons = Lesson::where(
                'course_id',
                $lesson->course_id
            )->count();

            $completedLessons = UserProgress::where(
                'user_id',
                $user->id
            )
            ->where('completed', true)
            ->whereHas('lesson', function ($query) use ($lesson) {

                $query->where('course_id', $lesson->course_id);

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

            // Set only once
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

                $courseProgress->completed_at = null;

            } elseif ($progress < 100) {

                $courseProgress->status = 'in_progress';

                $courseProgress->completed_at = null;

            } else {

                $courseProgress->status = 'completed';

                if (!$courseProgress->completed_at) {

                    $courseProgress->completed_at = now();

                }

            }

            $courseProgress->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Response
        |--------------------------------------------------------------------------
        */

        return response()->json([

            'success' => true,

            'quiz' => [

                'score' => $correct,

                'total' => $total,

                'wrong' => $wrong,

                'percentage' => $percentage,

                'passed' => $passed,

                'xp' => $xp

            ],

            'lesson' => [

                'completed' => $passed

            ],

            'course_progress' => $courseProgress

        ]);
    }
}