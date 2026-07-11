<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class EnglishPracticeQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',8)
            ->where('title','Daily Speaking Practice')
            ->first();

        $lesson2 = Lesson::where('course_id',8)
            ->where('title','Reading Practice')
            ->first();

        $lesson3 = Lesson::where('course_id',8)
            ->where('title','Listening Practice')
            ->first();

        $lesson4 = Lesson::where('course_id',8)
            ->where('title','Writing Practice')
            ->first();

        $lesson5 = Lesson::where('course_id',8)
            ->where('title','Revision Test')
            ->first();

        $questions = [

        /*
|--------------------------------------------------------------------------
| Lesson 1 : Daily Speaking Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson1->id,
    'question'=>'What is the best way to improve spoken English?',
    'options'=>[
        'Practice speaking every day',
        'Avoid speaking',
        'Memorize without speaking',
        'Only read books'
    ],
    'correct_answer'=>'Practice speaking every day',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which greeting is suitable when meeting a friend?',
    'options'=>[
        'Hello! How are you?',
        'Goodbye!',
        'See you yesterday.',
        'Never mind.'
    ],
    'correct_answer'=>'Hello! How are you?',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which sentence is correct?',
    'options'=>[
        'I speak English every day.',
        'I speaks English.',
        'Speak I English.',
        'English I speaked.'
    ],
    'correct_answer'=>'I speak English every day.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Daily speaking practice helps improve your?',
    'options'=>[
        'Fluency',
        'Sleep',
        'Drawing',
        'Cooking'
    ],
    'correct_answer'=>'Fluency',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which activity builds speaking confidence?',
    'options'=>[
        'Talking with others regularly',
        'Keeping silent',
        'Ignoring conversations',
        'Watching without listening'
    ],
    'correct_answer'=>'Talking with others regularly',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 2 : Reading Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Why is reading English passages regularly important?',
    'options'=>[
        'It improves vocabulary and comprehension',
        'It reduces speaking ability',
        'It is only for exams',
        'It is a waste of time'
    ],
    'correct_answer'=>'It improves vocabulary and comprehension',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'What should you do when you find a new English word while reading?',
    'options'=>[
        'Learn its meaning and pronunciation',
        'Skip it forever',
        'Ignore the sentence',
        'Close the book'
    ],
    'correct_answer'=>'Learn its meaning and pronunciation',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Reading newspapers helps improve your?',
    'options'=>[
        'Vocabulary',
        'Driving skills',
        'Painting',
        'Cooking'
    ],
    'correct_answer'=>'Vocabulary',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which material is best for English reading practice?',
    'options'=>[
        'Books and articles',
        'Blank paper',
        'Shopping receipts only',
        'Mathematics formulas'
    ],
    'correct_answer'=>'Books and articles',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Reading every day mainly improves your?',
    'options'=>[
        'Reading speed and understanding',
        'Sleeping habits',
        'Drawing skills',
        'Typing speed'
    ],
    'correct_answer'=>'Reading speed and understanding',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 3 : Listening Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What is the main purpose of listening practice?',
    'options'=>[
        'To improve listening comprehension',
        'To improve handwriting',
        'To learn mathematics',
        'To improve drawing'
    ],
    'correct_answer'=>'To improve listening comprehension',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which activity helps improve English listening skills?',
    'options'=>[
        'Listening to English podcasts',
        'Watching videos without sound',
        'Reading silently only',
        'Ignoring conversations'
    ],
    'correct_answer'=>'Listening to English podcasts',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What should you focus on while listening to English?',
    'options'=>[
        'Pronunciation and meaning',
        'Only the speaker\'s clothes',
        'Background noise',
        'Nothing'
    ],
    'correct_answer'=>'Pronunciation and meaning',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Listening regularly helps you understand?',
    'options'=>[
        'Different accents and spoken English',
        'Only grammar rules',
        'Only spelling',
        'Only punctuation'
    ],
    'correct_answer'=>'Different accents and spoken English',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which habit can improve your listening ability?',
    'options'=>[
        'Listening to English every day',
        'Avoiding English audio',
        'Skipping conversations',
        'Only memorizing words'
    ],
    'correct_answer'=>'Listening to English every day',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 4 : Writing Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson4->id,
    'question'=>'What is the first step in writing a good paragraph?',
    'options'=>[
        'Organize your ideas',
        'Write random sentences',
        'Ignore grammar',
        'Skip punctuation'
    ],
    'correct_answer'=>'Organize your ideas',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which sentence is written correctly?',
    'options'=>[
        'She writes a letter every week.',
        'She write a letter every week.',
        'She writing a letter every week.',
        'She written a letter every week.'
    ],
    'correct_answer'=>'She writes a letter every week.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Why is punctuation important in writing?',
    'options'=>[
        'It makes sentences clear and easy to understand',
        'It makes writing longer',
        'It changes handwriting',
        'It is only used in books'
    ],
    'correct_answer'=>'It makes sentences clear and easy to understand',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which of these is a good writing habit?',
    'options'=>[
        'Proofreading your work before submitting',
        'Ignoring spelling mistakes',
        'Using incomplete sentences',
        'Skipping grammar rules'
    ],
    'correct_answer'=>'Proofreading your work before submitting',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Regular writing practice helps improve your?',
    'options'=>[
        'Grammar and sentence formation',
        'Running speed',
        'Drawing skills',
        'Mathematics'
    ],
    'correct_answer'=>'Grammar and sentence formation',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 5 : Revision Test
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which activity helps improve all four English skills?',
    'options'=>[
        'Regular practice in speaking, reading, listening and writing',
        'Only memorizing vocabulary',
        'Only watching movies',
        'Only learning grammar rules'
    ],
    'correct_answer'=>'Regular practice in speaking, reading, listening and writing',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which sentence is grammatically correct?',
    'options'=>[
        'She is reading a book.',
        'She are reading a book.',
        'She reading a book.',
        'She read a book now.'
    ],
    'correct_answer'=>'She is reading a book.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which of the following is the best way to become fluent in English?',
    'options'=>[
        'Practice every day',
        'Study once a month',
        'Avoid speaking English',
        'Only memorize answers'
    ],
    'correct_answer'=>'Practice every day',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which skill improves by reading English books and articles?',
    'options'=>[
        'Reading comprehension',
        'Swimming',
        'Painting',
        'Cycling'
    ],
    'correct_answer'=>'Reading comprehension',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Why is a revision test important?',
    'options'=>[
        'It checks how much you have learned',
        'It replaces all lessons',
        'It makes learning difficult',
        'It is only for teachers'
    ],
    'correct_answer'=>'It checks how much you have learned',
    'created_at'=>now(),
    'updated_at'=>now(),
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