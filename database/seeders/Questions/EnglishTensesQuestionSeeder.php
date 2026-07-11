<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class EnglishTensesQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',4)
            ->where('title','Introduction to Tenses')
            ->first();

        $lesson2 = Lesson::where('course_id',4)
            ->where('title','Simple Present Tense')
            ->first();

        $lesson3 = Lesson::where('course_id',4)
            ->where('title','Present Continuous Tense')
            ->first();

        $lesson4 = Lesson::where('course_id',4)
            ->where('title','Simple Past Tense')
            ->first();

        $lesson5 = Lesson::where('course_id',4)
            ->where('title','Simple Future Tense')
            ->first();

     $questions = [

    /*
    |--------------------------------------------------------------------------
    | Lesson 1 : Introduction to Tenses
    |--------------------------------------------------------------------------
    */

    [
        'lesson_id' => $lesson1->id,
        'question' => 'What do tenses tell us?',
        'options' => [
            'When an action happens',
            'Who is speaking',
            'Where we live',
            'How many words are in a sentence'
        ],
        'correct_answer' => 'When an action happens',
        'created_at' => now(),
        'updated_at' => now(),
    ],

    [
        'lesson_id' => $lesson1->id,
        'question' => 'How many main tenses are there in English?',
        'options' => [
            'Three',
            'Four',
            'Five',
            'Six'
        ],
        'correct_answer' => 'Three',
        'created_at' => now(),
        'updated_at' => now(),
    ],

    [
        'lesson_id' => $lesson1->id,
        'question' => 'Which is NOT a main tense?',
        'options' => [
            'Present',
            'Past',
            'Future',
            'Perfect'
        ],
        'correct_answer' => 'Perfect',
        'created_at' => now(),
        'updated_at' => now(),
    ],

    [
        'lesson_id' => $lesson1->id,
        'question' => 'Which sentence is in the Future Tense?',
        'options' => [
            'I will play cricket.',
            'I played cricket.',
            'I play cricket.',
            'I am playing cricket.'
        ],
        'correct_answer' => 'I will play cricket.',
        'created_at' => now(),
        'updated_at' => now(),
    ],

    [
        'lesson_id' => $lesson1->id,
        'question' => 'How many forms does each main tense have?',
        'options' => [
            'Four',
            'Two',
            'Three',
            'Five'
        ],
        'correct_answer' => 'Four',
        'created_at' => now(),
        'updated_at' => now(),
    ],

   
    /*
|--------------------------------------------------------------------------
| Lesson 2 : Simple Present Tense
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson2->id,
    'question' => 'Simple Present Tense is mainly used for?',
    'options' => [
        'Habits and facts',
        'Past events',
        'Future plans',
        'Dreams'
    ],
    'correct_answer' => 'Habits and facts',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Choose the correct Simple Present sentence.',
    'options' => [
        'She goes to school.',
        'She went to school.',
        'She is going to school.',
        'She will go to school.'
    ],
    'correct_answer' => 'She goes to school.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which sentence expresses a universal truth?',
    'options' => [
        'The sun rises in the east.',
        'The sun rose yesterday.',
        'The sun will rise tomorrow.',
        'The sun is rising now.'
    ],
    'correct_answer' => 'The sun rises in the east.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'What is the structure of the Simple Present Tense?',
    'options' => [
        'Subject + Verb + Object',
        'Subject + is/am/are + Verb-ing',
        'Subject + Verb (2nd form)',
        'Subject + will + Verb'
    ],
    'correct_answer' => 'Subject + Verb + Object',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which sentence is in the Simple Present Tense?',
    'options' => [
        'I study English.',
        'I studied English.',
        'I am studying English.',
        'I will study English.'
    ],
    'correct_answer' => 'I study English.',
    'created_at' => now(),
    'updated_at' => now(),
],



  

/*
|--------------------------------------------------------------------------
| Lesson 3 : Present Continuous Tense
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson3->id,
    'question' => 'Present Continuous Tense is used for?',
    'options' => [
        'Actions happening now',
        'Past actions',
        'Future plans',
        'Universal truths'
    ],
    'correct_answer' => 'Actions happening now',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Which helping verbs are used in Present Continuous Tense?',
    'options' => [
        'is / am / are',
        'was / were',
        'has / have',
        'will'
    ],
    'correct_answer' => 'is / am / are',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Choose the correct Present Continuous sentence.',
    'options' => [
        'She is cooking.',
        'She cooked.',
        'She cooks.',
        'She will cook.'
    ],
    'correct_answer' => 'She is cooking.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'What is the correct structure of Present Continuous Tense?',
    'options' => [
        'Subject + is/am/are + Verb-ing',
        'Subject + Verb + Object',
        'Subject + Verb (2nd form)',
        'Subject + will + Verb'
    ],
    'correct_answer' => 'Subject + is/am/are + Verb-ing',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Which sentence is in Present Continuous Tense?',
    'options' => [
        'They are playing football.',
        'They played football.',
        'They play football.',
        'They will play football.'
    ],
    'correct_answer' => 'They are playing football.',
    'created_at' => now(),
    'updated_at' => now(),
],





/*
|--------------------------------------------------------------------------
| Lesson 4 : Simple Past Tense
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson4->id,
    'question' => 'Simple Past Tense is used for?',
    'options' => [
        'Completed actions in the past',
        'Actions happening now',
        'Future actions',
        'Habits'
    ],
    'correct_answer' => 'Completed actions in the past',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Which verb form is generally used in Simple Past Tense?',
    'options' => [
        'Second form of the verb',
        'Base form',
        'Verb-ing',
        'Will + verb'
    ],
    'correct_answer' => 'Second form of the verb',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Choose the correct Simple Past sentence.',
    'options' => [
        'I visited Delhi.',
        'I visit Delhi.',
        'I am visiting Delhi.',
        'I will visit Delhi.'
    ],
    'correct_answer' => 'I visited Delhi.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Which sentence talks about yesterday?',
    'options' => [
        'She watched a movie.',
        'She watches a movie.',
        'She is watching a movie.',
        'She will watch a movie.'
    ],
    'correct_answer' => 'She watched a movie.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Identify the Simple Past sentence.',
    'options' => [
        'We played football.',
        'We play football.',
        'We are playing football.',
        'We will play football.'
    ],
    'correct_answer' => 'We played football.',
    'created_at' => now(),
    'updated_at' => now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 5 : Simple Future Tense
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson5->id,
    'question' => 'Simple Future Tense is used for?',
    'options' => [
        'Future plans and actions',
        'Past actions',
        'Current actions',
        'Universal truths'
    ],
    'correct_answer' => 'Future plans and actions',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Which helping verb is used in the Simple Future Tense?',
    'options' => [
        'Will',
        'Is',
        'Was',
        'Has'
    ],
    'correct_answer' => 'Will',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Choose the correct Future Tense sentence.',
    'options' => [
        'I will study tomorrow.',
        'I studied yesterday.',
        'I am studying.',
        'I study every day.'
    ],
    'correct_answer' => 'I will study tomorrow.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'What is the correct structure of Simple Future Tense?',
    'options' => [
        'Subject + will + Verb',
        'Subject + Verb',
        'Subject + Verb-ing',
        'Subject + Verb (2nd form)'
    ],
    'correct_answer' => 'Subject + will + Verb',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Which sentence is in the Simple Future Tense?',
    'options' => [
        'They will play cricket.',
        'They played cricket.',
        'They play cricket.',
        'They are playing cricket.'
    ],
    'correct_answer' => 'They will play cricket.',
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