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
    'explanation' => 'Tenses indicate the time of an action, whether it happened in the past, is happening now, or will happen in the future.',
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
    'explanation' => 'English has three main tenses: Present, Past and Future.',
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
    'explanation' => 'Perfect is an aspect of a tense, not one of the three main tenses.',
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
    'explanation' => 'The helping verb "will" indicates the Simple Future Tense.',
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
    'explanation' => 'Each main tense has four forms: Simple, Continuous, Perfect and Perfect Continuous.',
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
    'explanation' => 'The Simple Present Tense is used to describe daily habits, routines, facts, and universal truths.',
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
    'explanation' => 'The verb "goes" is the correct Simple Present form used with the third-person singular subject "She".',
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
    'explanation' => 'Universal truths and scientific facts are always expressed using the Simple Present Tense.',
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
    'explanation' => 'The basic structure of the Simple Present Tense is Subject + Base Verb (+ s/es for third-person singular) + Object.',
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
    'explanation' => 'The sentence describes a regular habit using the Simple Present Tense.',
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
    'explanation' => 'The Present Continuous Tense describes actions that are happening at the present moment.',
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
    'explanation' => 'The helping verbs "is", "am", and "are" are used with the -ing form of the verb in the Present Continuous Tense.',
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
    'explanation' => 'The sentence uses the helping verb "is" with the verb "cooking", which is the correct Present Continuous structure.',
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
    'explanation' => 'The Present Continuous Tense is formed using Subject + is/am/are + Verb-ing.',
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
    'explanation' => 'The helping verb "are" together with "playing" shows that the action is happening now.',
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
    'explanation' => 'The Simple Past Tense describes actions that started and finished in the past.',
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
    'explanation' => 'The Simple Past Tense normally uses the second (past) form of the verb, such as "played", "visited", or "watched".',
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
    'explanation' => 'The verb "visited" is the second form of the verb "visit", making this a correct Simple Past sentence.',
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
    'explanation' => 'The word "yesterday" refers to a completed action in the past, so the Simple Past Tense is used.',
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
    'explanation' => 'The verb "played" is in its past form, indicating a completed action in the past.',
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
    'explanation' => 'The Simple Future Tense describes actions that will happen in the future.',
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
    'explanation' => 'The helping verb "will" is used with the base form of the verb to form the Simple Future Tense.',
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
    'explanation' => 'The helping verb "will" indicates that the action will happen in the future.',
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
    'explanation' => 'The Simple Future Tense is formed using Subject + will + base verb.',
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
    'explanation' => 'The sentence uses "will" with the base verb "play", which correctly forms the Simple Future Tense.',
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