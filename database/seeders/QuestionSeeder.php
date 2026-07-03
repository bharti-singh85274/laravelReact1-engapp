<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        Question::insert([

            [
                'lesson_id' => 1,
                'question' => 'How do you greet someone in English?',
                'options' => json_encode([
                    'Hello',
                    'Bye',
                    'Sorry',
                    'Thanks'
                ]),
                'correct_answer' => 'Hello',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'lesson_id' => 1,
                'question' => 'Which one is a morning greeting?',
                'options' => json_encode([
                    'Good Night',
                    'Good Morning',
                    'Bye',
                    'See You'
                ]),
                'correct_answer' => 'Good Morning',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'lesson_id' => 2,
                'question' => 'How do you introduce yourself?',
                'options' => json_encode([
                    'My name is John',
                    'Good Bye',
                    'See You',
                    'Welcome'
                ]),
                'correct_answer' => 'My name is John',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}