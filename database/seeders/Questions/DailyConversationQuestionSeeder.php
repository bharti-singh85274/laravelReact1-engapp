<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class DailyConversationQuestionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Lesson 1 : Meeting Someone
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Meeting Someone', [

            [
                'question' => 'What do you usually say when meeting someone for the first time?',
                'options' => [
                    'Hello',
                    'Good Night',
                    'Good Bye',
                    'See You'
                ],
                'correct_answer' => 'Hello'
            ],

            [
                'question' => 'Which sentence introduces yourself?',
                'options' => [
                    'My name is Rahul.',
                    'Good Night.',
                    'See you later.',
                    'Thank you.'
                ],
                'correct_answer' => 'My name is Rahul.'
            ],

            [
                'question' => 'Which expression is polite when meeting someone?',
                'options' => [
                    'Nice to meet you.',
                    'Go away.',
                    'Leave me alone.',
                    'Be quiet.'
                ],
                'correct_answer' => 'Nice to meet you.'
            ],

            [
                'question' => 'Which greeting is used during the morning?',
                'options' => [
                    'Good Morning',
                    'Good Evening',
                    'Good Night',
                    'Bye'
                ],
                'correct_answer' => 'Good Morning'
            ],

            [
                'question' => 'What is the best response to "Nice to meet you"?',
                'options' => [
                    'Nice to meet you too.',
                    'Good Night.',
                    'No.',
                    'Bye.'
                ],
                'correct_answer' => 'Nice to meet you too.'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 2 : Talking at Home
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Talking at Home', [

            [
                'question' => 'What do you usually say to your parents in the morning?',
                'options' => [
                    'Good Morning',
                    'Good Bye',
                    'See you tomorrow',
                    'Congratulations'
                ],
                'correct_answer' => 'Good Morning'
            ],

            [
                'question' => 'How do you politely offer help?',
                'options' => [
                    'Can I help you?',
                    'Go away.',
                    'Leave it.',
                    'No.'
                ],
                'correct_answer' => 'Can I help you?'
            ],

            [
                'question' => 'Which word shows gratitude?',
                'options' => [
                    'Thank you',
                    'Sorry',
                    'Hello',
                    'Please'
                ],
                'correct_answer' => 'Thank you'
            ],

            [
                

                'question' => 'How do you ask about someone\'s health?',
                'options' => [
                    'How are you?',
                    'Where are you?',
                    'Who are you?',
                    'When are you?'
                ],
                'correct_answer' => 'How are you?'
            ],

            [
                'question' => 'What is a polite reply to "How are you?"',
                'options' => [
                    "I'm fine.",
                    "Go away.",
                    "Nothing.",
                    "Never."
                ],
                'correct_answer' => "I'm fine."
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 3 : Talking with Friends
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Talking with Friends', [

            [
                'question' => 'Which greeting is common among friends?',
                'options' => [
                    'Hi',
                    'Good Night',
                    'Good Bye',
                    'Congratulations'
                ],
                'correct_answer' => 'Hi'
            ],

            [
                'question' => 'How do you ask your friend what they are doing?',
                'options' => [
                    'What are you doing?',
                    'Where is your bag?',
                    'How old are you?',
                    'What is your name?'
                ],
                'correct_answer' => 'What are you doing?'
            ],

            [
                'question' => 'Which sentence invites a friend?',
                'options' => [
                    "Let's play.",
                    'Go home.',
                    'Sit alone.',
                    'Be quiet.'
                ],
                'correct_answer' => "Let's play."
            ],

            [
                'question' => 'Which reply means everything is okay?',
                'options' => [
                    "I'm doing well.",
                    "I don't know.",
                    "Never.",
                    "No."
                ],
                'correct_answer' => "I'm doing well."
            ],

            [
                'question' => 'Which conversation is friendly?',
                'options' => [
                    'Hi Rahul!',
                    'Go away!',
                    'Stop talking!',
                    'Leave now!'
                ],
                'correct_answer' => 'Hi Rahul!'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 4 : Shopping Conversation
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Shopping Conversation', [

            [
                'question' => 'How do you ask the price of an item?',
                'options' => [
                    'How much is this?',
                    'Where is this?',
                    'Who bought this?',
                    'When is this?'
                ],
                'correct_answer' => 'How much is this?'
            ],

            [
                'question' => 'What do you say when you want to buy something?',
                'options' => [
                    'Can I have this?',
                    'Go away.',
                    'Never.',
                    'No.'
                ],
                'correct_answer' => 'Can I have this?'
            ],

            [
                'question' => 'How do you ask for another size?',
                'options' => [
                    'Do you have another size?',
                    'Give me free.',
                    'Take this.',
                    'I do not want.'
                ],
                'correct_answer' => 'Do you have another size?'
            ],

            [
                'question' => 'The shopkeeper says "It is 500 rupees." What did you ask?',
                'options' => [
                    'How much is this?',
                    'Where are you?',
                    'Who are you?',
                    'How old are you?'
                ],
                'correct_answer' => 'How much is this?'
            ],

            [
                'question' => 'Which sentence is polite while shopping?',
                'options' => [
                    'Thank you.',
                    'Move.',
                    'Go.',
                    'Hurry.'
                ],
                'correct_answer' => 'Thank you.'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 5 : Ordering Food
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Ordering Food', [

            [
                'question' => 'What do you ask before ordering?',
                'options' => [
                    'May I see the menu?',
                    'Where is your house?',
                    'Who are you?',
                    'Come here.'
                ],
                'correct_answer' => 'May I see the menu?'
            ],

            [
                'question' => 'How do you order food politely?',
                'options' => [
                    'I would like a sandwich.',
                    'Give food.',
                    'Bring now.',
                    'Fast.'
                ],
                'correct_answer' => 'I would like a sandwich.'
            ],

            [
                'question' => 'How do you ask for water?',
                'options' => [
                    'Can I have some water?',
                    'Take water.',
                    'Go away.',
                    'Nothing.'
                ],
                'correct_answer' => 'Can I have some water?'
            ],

            [
                'question' => 'What is a polite reply after ordering?',
                'options' => [
                    'Thank you.',
                    'Never.',
                    'No.',
                    'Stop.'
                ],
                'correct_answer' => 'Thank you.'
            ],

            [
                'question' => 'If the waiter asks "Anything else?", you can reply:',
                'options' => [
                    'No, thank you.',
                    'Go away.',
                    'Nothing.',
                    'Leave.'
                ],
                'correct_answer' => 'No, thank you.'
            ],

        ]);
    }

    /**
     * Store Questions
     */
    private function addQuestions(string $lessonTitle, array $questions): void
    {
        $lesson = Lesson::where('title', $lessonTitle)->first();

        if (!$lesson) {
            return;
        }

        foreach ($questions as $question) {

            Question::updateOrCreate(

                [
                    'lesson_id' => $lesson->id,
                    'question' => $question['question'],
                ],

                [
                    'options' => $question['options'],
                    'correct_answer' => $question['correct_answer'],
                ]

            );

        }
    }
}