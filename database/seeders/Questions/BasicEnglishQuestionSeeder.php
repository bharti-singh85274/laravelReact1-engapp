<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class BasicEnglishQuestionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Lesson 1 : English Alphabet
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('English Alphabet', [

            [
                'question' => 'How many letters are there in the English alphabet?',
                'options' => ['24','25','26','28'],
                'correct_answer' => '26'
            ],

            [
                'question' => 'Which letter comes after C?',
                'options' => ['B','D','E','F'],
                'correct_answer' => 'D'
            ],

            [
                'question' => 'Which is the first letter of the alphabet?',
                'options' => ['A','B','C','Z'],
                'correct_answer' => 'A'
            ],

            [
                'question' => 'Which of these is a vowel?',
                'options' => ['B','D','A','G'],
                'correct_answer' => 'A'
            ],

            [
                'question' => 'How many vowels are there?',
                'options' => ['3','4','5','6'],
                'correct_answer' => '5'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 2 : Basic Greetings
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Basic Greetings', [

            [
                'question' => 'Which greeting is used in the morning?',
                'options' => [
                    'Good Morning',
                    'Good Night',
                    'Bye',
                    'See You'
                ],
                'correct_answer' => 'Good Morning'
            ],

            [
                'question' => 'Which greeting is suitable in the evening?',
                'options' => [
                    'Good Evening',
                    'Good Morning',
                    'Hello Morning',
                    'Good Day'
                ],
                'correct_answer' => 'Good Evening'
            ],

            [
                'question' => 'What do you say when meeting someone?',
                'options' => [
                    'Hello',
                    'Goodbye',
                    'Sorry',
                    'Excuse me'
                ],
                'correct_answer' => 'Hello'
            ],

            [
                'question' => 'Which word is an informal greeting?',
                'options' => [
                    'Hi',
                    'Sorry',
                    'Please',
                    'Thanks'
                ],
                'correct_answer' => 'Hi'
            ],

            [
                'question' => 'Which greeting is based on time?',
                'options' => [
                    'Good Morning',
                    'Hi',
                    'Hello',
                    'Hey'
                ],
                'correct_answer' => 'Good Morning'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 3 : Introducing Yourself
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Introducing Yourself', [

            [
                'question' => 'Which sentence introduces yourself?',
                'options' => [
                    'My name is Rahul.',
                    'Goodbye.',
                    'See you.',
                    'Thank you.'
                ],
                'correct_answer' => 'My name is Rahul.'
            ],

            [
                'question' => 'Which sentence tells your hometown?',
                'options' => [
                    'I am from Delhi.',
                    'I like apples.',
                    'I play cricket.',
                    'Good Morning.'
                ],
                'correct_answer' => 'I am from Delhi.'
            ],

            [
                'question' => 'Which sentence tells your occupation?',
                'options' => [
                    'I am a student.',
                    'I have a pen.',
                    'Nice to meet you.',
                    'Hello.'
                ],
                'correct_answer' => 'I am a student.'
            ],

            [
                'question' => 'Which phrase is polite after introducing yourself?',
                'options' => [
                    'Nice to meet you.',
                    'Go away.',
                    'Never mind.',
                    'No problem.'
                ],
                'correct_answer' => 'Nice to meet you.'
            ],

            [
                'question' => 'Which sentence starts an introduction?',
                'options' => [
                    'Hello.',
                    'Bye.',
                    'Later.',
                    'Good Night.'
                ],
                'correct_answer' => 'Hello.'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 4 : Family Members
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Family Members', [

            [
                'question' => "Who is your mother's husband?",
                'options' => [
                    'Father',
                    'Brother',
                    'Uncle',
                    'Cousin'
                ],
                'correct_answer' => 'Father'
            ],

            [
                'question' => "Your father's daughter is your?",
                'options' => [
                    'Sister',
                    'Mother',
                    'Aunt',
                    'Teacher'
                ],
                'correct_answer' => 'Sister'
            ],

            [
                'question' => "Who is your father's father?",
                'options' => [
                    'Grandfather',
                    'Brother',
                    'Friend',
                    'Teacher'
                ],
                'correct_answer' => 'Grandfather'
            ],

            [
                'question' => 'Who cooks food in the lesson example?',
                'options' => [
                    'Mother',
                    'Brother',
                    'Friend',
                    'Teacher'
                ],
                'correct_answer' => 'Mother'
            ],

            [
                'question' => 'Which is a family member?',
                'options' => [
                    'Sister',
                    'Doctor',
                    'Police',
                    'Driver'
                ],
                'correct_answer' => 'Sister'
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | Lesson 5 : Numbers
        |--------------------------------------------------------------------------
        */

        $this->addQuestions('Numbers', [

            [
                'question' => 'Which number comes after Four?',
                'options' => [
                    'Five',
                    'Six',
                    'Three',
                    'Seven'
                ],
                'correct_answer' => 'Five'
            ],

            [
                'question' => 'How do you write 2 in words?',
                'options' => [
                    'Two',
                    'Three',
                    'One',
                    'Four'
                ],
                'correct_answer' => 'Two'
            ],

            [
                'question' => 'How many books are in the example sentence?',
                'options' => [
                    'Two',
                    'Three',
                    'Four',
                    'Five'
                ],
                'correct_answer' => 'Two'
            ],

            [
                'question' => 'Which is the correct spelling?',
                'options' => [
                    'Three',
                    'Thre',
                    'Tree',
                    'Thrie'
                ],
                'correct_answer' => 'Three'
            ],

            [
                'question' => 'Which number comes before Five?',
                'options' => [
                    'Four',
                    'Six',
                    'Three',
                    'Two'
                ],
                'correct_answer' => 'Four'
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
                    'question'  => $question['question'],
                ],

                [
                    'options' => $question['options'],
                    'correct_answer' => $question['correct_answer'],
                ]

            );

        }
    }
}