<?php

namespace App\Services\Quiz;

use App\Models\QuizResult;

class QuizReviewService
{
    public function getReview($user, int $lessonId): array
    {
        $quizResult = QuizResult::with([
            'lesson',
            'answers.question'
        ])
        ->where('user_id', $user->id)
        ->where('lesson_id', $lessonId)
        ->latest()
        ->firstOrFail();

        return [

            'lesson' => [

                'id' => $quizResult->lesson->id,

                'title' => $quizResult->lesson->title,

            ],

            'result' => [

                'score' => $quizResult->correct_answers,

                'total' => $quizResult->total_questions,

                'wrong' => $quizResult->wrong_answers,

                'percentage' => $quizResult->percentage,

                'passed' => $quizResult->passed,

                'xp' => $quizResult->xp_earned,

            ],

            'answers' => $quizResult->answers->map(function ($answer) {

                return [

                    'question' => $answer->question->question,

                    'selected_answer' => $answer->selected_answer,

                    'correct_answer' => $answer->correct_answer,

                    'is_correct' => $answer->is_correct,

                    'explanation' => $answer->question->explanation,

                ];

            })->values()

        ];
    }
}