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
    'explanation'=>'Speaking English every day builds confidence, fluency and improves pronunciation.',
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
    'explanation'=>'"Hello! How are you?" is a friendly and natural greeting when meeting someone.',
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
    'explanation'=>'The subject "I" always uses the base verb "speak", making this sentence grammatically correct.',
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
    'explanation'=>'Speaking regularly helps you communicate more smoothly and naturally, improving fluency.',
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
    'explanation'=>'Regular conversations help reduce fear and increase confidence when speaking English.',
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
    'explanation'=>'Reading regularly introduces new words and improves your ability to understand English texts.',
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
    'explanation'=>'Learning the meaning and pronunciation of new words helps expand your vocabulary and improves communication.',
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
    'explanation'=>'Newspapers contain a wide range of useful words and expressions that improve your vocabulary.',
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
    'explanation'=>'Books and articles provide meaningful content that develops reading skills and language understanding.',
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
    'explanation'=>'Daily reading increases reading speed while improving comprehension of English texts.',
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
    'question'=>'Why should you listen to English every day?',
    'options'=>[
        'To improve listening skills',
        'To forget English',
        'To avoid conversations',
        'To improve handwriting'
    ],
    'correct_answer'=>'To improve listening skills',
    'explanation'=>'Listening to English every day helps you understand different accents, pronunciation, and natural conversations.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which resource is useful for listening practice?',
    'options'=>[
        'English podcasts',
        'Silent videos',
        'Blank notebook',
        'Calculator'
    ],
    'correct_answer'=>'English podcasts',
    'explanation'=>'English podcasts expose you to real-life conversations and improve your listening comprehension.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Listening carefully helps you improve your?',
    'options'=>[
        'Pronunciation',
        'Drawing',
        'Swimming',
        'Cooking'
    ],
    'correct_answer'=>'Pronunciation',
    'explanation'=>'By listening carefully to native speakers, you learn correct pronunciation and sentence stress.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What should you do if you do not understand an English audio?',
    'options'=>[
        'Listen again',
        'Stop learning',
        'Delete the audio',
        'Ignore English'
    ],
    'correct_answer'=>'Listen again',
    'explanation'=>'Listening multiple times helps you understand unfamiliar words and improves comprehension.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which habit improves English listening the most?',
    'options'=>[
        'Listening daily',
        'Never listening',
        'Only reading',
        'Only writing'
    ],
    'correct_answer'=>'Listening daily',
    'explanation'=>'Daily listening practice gradually improves your ability to understand spoken English naturally.',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 4 : Pronunciation Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Why is pronunciation important in English?',
    'options'=>[
        'It helps others understand you clearly',
        'It makes writing faster',
        'It improves drawing skills',
        'It is only useful for exams'
    ],
    'correct_answer'=>'It helps others understand you clearly',
    'explanation'=>'Good pronunciation makes your spoken English easier for others to understand.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which activity improves pronunciation?',
    'options'=>[
        'Repeating after native speakers',
        'Ignoring pronunciation',
        'Reading silently only',
        'Avoiding conversations'
    ],
    'correct_answer'=>'Repeating after native speakers',
    'explanation'=>'Listening to and repeating native speakers helps improve pronunciation, stress and intonation.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'What should you focus on while practicing pronunciation?',
    'options'=>[
        'Correct sounds and word stress',
        'Speaking as fast as possible',
        'Skipping difficult words',
        'Using only gestures'
    ],
    'correct_answer'=>'Correct sounds and word stress',
    'explanation'=>'Correct pronunciation includes producing the right sounds and placing stress on the correct syllables.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which tool can help improve English pronunciation?',
    'options'=>[
        'Dictionary with audio pronunciation',
        'Calculator',
        'Paint brush',
        'Compass'
    ],
    'correct_answer'=>'Dictionary with audio pronunciation',
    'explanation'=>'Many English dictionaries provide audio recordings to help learners pronounce words correctly.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'How often should you practice pronunciation?',
    'options'=>[
        'Every day',
        'Only once a month',
        'Only before exams',
        'Never'
    ],
    'correct_answer'=>'Every day',
    'explanation'=>'Daily pronunciation practice gradually improves clarity, confidence and fluency.',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 5 : Complete Speaking Practice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What is the best way to become fluent in English?',
    'options'=>[
        'Practice speaking every day',
        'Avoid speaking',
        'Memorize grammar only',
        'Translate every sentence'
    ],
    'correct_answer'=>'Practice speaking every day',
    'explanation'=>'Speaking English daily helps develop fluency, confidence and natural communication skills.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What should you do if you make a mistake while speaking English?',
    'options'=>[
        'Keep speaking and learn from it',
        'Stop speaking forever',
        'Never try again',
        'Change the language'
    ],
    'correct_answer'=>'Keep speaking and learn from it',
    'explanation'=>'Mistakes are a natural part of learning. Continue speaking and improve through practice.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which habit improves overall English communication?',
    'options'=>[
        'Speaking, listening, reading and writing regularly',
        'Only memorizing vocabulary',
        'Only studying grammar',
        'Avoiding conversations'
    ],
    'correct_answer'=>'Speaking, listening, reading and writing regularly',
    'explanation'=>'Using all four language skills together helps you become a confident English speaker.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What should you do when someone speaks English to you?',
    'options'=>[
        'Listen carefully and reply confidently',
        'Ignore the person',
        'Walk away',
        'Stay completely silent'
    ],
    'correct_answer'=>'Listen carefully and reply confidently',
    'explanation'=>'Listening carefully before replying helps you understand the conversation and answer appropriately.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What is the key to mastering spoken English?',
    'options'=>[
        'Consistent daily practice',
        'Practicing once a month',
        'Reading only',
        'Avoiding difficult words'
    ],
    'correct_answer'=>'Consistent daily practice',
    'explanation'=>'Regular daily practice is the most effective way to improve spoken English over time.',
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