<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Lesson;

class GrammarBasicsQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',3)
            ->where('title','What is Grammar?')
            ->first();

        $lesson2 = Lesson::where('course_id',3)
            ->where('title','Parts of Speech')
            ->first();

        $lesson3 = Lesson::where('course_id',3)
            ->where('title','Nouns')
            ->first();

        $lesson4 = Lesson::where('course_id',3)
            ->where('title','Pronouns')
            ->first();

        $lesson5 = Lesson::where('course_id',3)
            ->where('title','Verbs')
            ->first();

     $questions = [

    
             /*
        |--------------------------------------------------------------------------
        | Lesson 1 : What is Grammar?
        |--------------------------------------------------------------------------
        */

        [
            'lesson_id' => $lesson1->id,
            'question' => 'What is grammar?',
            'options' => [
                'Rules of a language',
                'A story book',
                'A game',
                'A dictionary'
            ],
            'correct_answer' => 'Rules of a language',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson1->id,
            'question' => 'Grammar helps us to?',
            'options' => [
                'Speak and write correctly',
                'Play cricket',
                'Draw pictures',
                'Cook food'
            ],
            'correct_answer' => 'Speak and write correctly',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson1->id,
            'question' => 'Grammar tells us how to?',
            'options' => [
                'Arrange words into meaningful sentences',
                'Play games',
                'Draw maps',
                'Cook food'
            ],
            'correct_answer' => 'Arrange words into meaningful sentences',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson1->id,
            'question' => 'Correct grammar makes communication?',
            'options' => [
                'Easy',
                'Difficult',
                'Impossible',
                'Slow'
            ],
            'correct_answer' => 'Easy',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson1->id,
            'question' => 'Which sentence is correct?',
            'options' => [
                'She is happy.',
                'She happy.',
                'Happy she.',
                'Is happy she.'
            ],
            'correct_answer' => 'She is happy.',
            'created_at' => now(),
            'updated_at' => now(),
        ],



                /*
        |--------------------------------------------------------------------------
        | Lesson 2 : Parts of Speech
        |--------------------------------------------------------------------------
        */

        [
            'lesson_id' => $lesson2->id,
            'question' => 'How many parts of speech are there?',
            'options' => [
                'Eight',
                'Five',
                'Six',
                'Ten'
            ],
            'correct_answer' => 'Eight',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson2->id,
            'question' => 'Which of these is a noun?',
            'options' => [
                'Teacher',
                'Quickly',
                'Beautiful',
                'And'
            ],
            'correct_answer' => 'Teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson2->id,
            'question' => 'Which of these is a pronoun?',
            'options' => [
                'She',
                'Book',
                'School',
                'Run'
            ],
            'correct_answer' => 'She',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson2->id,
            'question' => 'Which of these is an adjective?',
            'options' => [
                'Beautiful',
                'Teacher',
                'Run',
                'Slowly'
            ],
            'correct_answer' => 'Beautiful',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson2->id,
            'question' => 'Which sentence contains a verb?',
            'options' => [
                'Rahul plays cricket.',
                'Beautiful flower.',
                'Red apple.',
                'Happy child.'
            ],
            'correct_answer' => 'Rahul plays cricket.',
            'created_at' => now(),
            'updated_at' => now(),
        ],




                /*
        |--------------------------------------------------------------------------
        | Lesson 3 : Nouns
        |--------------------------------------------------------------------------
        */

        [
            'lesson_id' => $lesson3->id,
            'question' => 'What is a noun?',
            'options' => [
                'A name of a person, place, animal or thing',
                'An action word',
                'A describing word',
                'A joining word'
            ],
            'correct_answer' => 'A name of a person, place, animal or thing',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson3->id,
            'question' => 'Which of these is a noun?',
            'options' => [
                'School',
                'Quickly',
                'Beautiful',
                'Run'
            ],
            'correct_answer' => 'School',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson3->id,
            'question' => 'Which sentence contains a noun?',
            'options' => [
                'Rahul is reading a book.',
                'Run quickly.',
                'Very beautiful.',
                'Slowly walked.'
            ],
            'correct_answer' => 'Rahul is reading a book.',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson3->id,
            'question' => 'Dog is the name of?',
            'options' => [
                'An animal',
                'A place',
                'An action',
                'A color'
            ],
            'correct_answer' => 'An animal',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson3->id,
            'question' => 'Book is an example of?',
            'options' => [
                'Thing',
                'Verb',
                'Pronoun',
                'Adverb'
            ],
            'correct_answer' => 'Thing',
            'created_at' => now(),
            'updated_at' => now(),
        ],


                /*
        |--------------------------------------------------------------------------
        | Lesson 4 : Pronouns
        |--------------------------------------------------------------------------
        */

        [
            'lesson_id' => $lesson4->id,
            'question' => 'What is a pronoun?',
            'options' => [
                'A word that replaces a noun',
                'A naming word',
                'An action word',
                'A describing word'
            ],
            'correct_answer' => 'A word that replaces a noun',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson4->id,
            'question' => 'Which is a pronoun?',
            'options' => [
                'He',
                'School',
                'Beautiful',
                'Run'
            ],
            'correct_answer' => 'He',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson4->id,
            'question' => 'Choose the correct pronoun: Rahul is a student. ___ studies English.',
            'options' => [
                'He',
                'It',
                'They',
                'We'
            ],
            'correct_answer' => 'He',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson4->id,
            'question' => 'Which of these is NOT a pronoun?',
            'options' => [
                'Book',
                'They',
                'We',
                'She'
            ],
            'correct_answer' => 'Book',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson4->id,
            'question' => 'Pronouns help us avoid?',
            'options' => [
                'Repeating nouns',
                'Writing',
                'Reading',
                'Listening'
            ],
            'correct_answer' => 'Repeating nouns',
            'created_at' => now(),
            'updated_at' => now(),
        ],

                /*
        |--------------------------------------------------------------------------
        | Lesson 5 : Verbs
        |--------------------------------------------------------------------------
        */

        [
            'lesson_id' => $lesson5->id,
            'question' => 'What is a verb?',
            'options' => [
                'A word that shows action or state',
                'A naming word',
                'A joining word',
                'A describing word'
            ],
            'correct_answer' => 'A word that shows action or state',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson5->id,
            'question' => 'Which of these is a verb?',
            'options' => [
                'Run',
                'School',
                'Beautiful',
                'Chair'
            ],
            'correct_answer' => 'Run',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson5->id,
            'question' => 'Identify the verb: She writes well.',
            'options' => [
                'Writes',
                'She',
                'Well',
                'The'
            ],
            'correct_answer' => 'Writes',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson5->id,
            'question' => 'Every sentence usually contains a?',
            'options' => [
                'Verb',
                'Color',
                'Number',
                'Punctuation mark'
            ],
            'correct_answer' => 'Verb',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'lesson_id' => $lesson5->id,
            'question' => 'Which sentence contains a verb?',
            'options' => [
                'They play football.',
                'Blue sky.',
                'Beautiful flower.',
                'Red apple.'
            ],
            'correct_answer' => 'They play football.',
            'created_at' => now(),
            'updated_at' => now(),
        

     
        
         ],

];

        foreach ($questions as $question){

            Question::updateOrCreate(

                [
                    'lesson_id'=>$question['lesson_id'],
                    'question'=>$question['question']
                ],

                $question

            );

        }

    }
}