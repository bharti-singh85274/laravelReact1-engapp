<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class IdiomsAndPhrasesQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',6)
            ->where('title','Break the Ice')
            ->first();

        $lesson2 = Lesson::where('course_id',6)
            ->where('title','Piece of Cake')
            ->first();

        $lesson3 = Lesson::where('course_id',6)
            ->where('title','Once in a Blue Moon')
            ->first();

        $lesson4 = Lesson::where('course_id',6)
            ->where('title','Hit the Books')
            ->first();

        $lesson5 = Lesson::where('course_id',6)
            ->where('title','Better Late Than Never')
            ->first();

        $questions = [

            // Lesson questions go here

           


/*
|--------------------------------------------------------------------------
| Lesson 1 : Break the Ice
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson1->id,
    'question'=>'What does "Break the Ice" mean?',
    'options'=>[
        'Start a friendly conversation',
        'Break frozen water',
        'End a meeting',
        'Win a game'
    ],
    'correct_answer'=>'Start a friendly conversation',
    'explanation'=>'The idiom "Break the Ice" means to start a conversation or activity that helps people feel comfortable, especially when they are meeting for the first time.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'When do people usually break the ice?',
    'options'=>[
        'At the beginning of a conversation',
        'Before sleeping',
        'While cooking',
        'After leaving'
    ],
    'correct_answer'=>'At the beginning of a conversation',
    'explanation'=>'People usually break the ice when they first meet others to reduce nervousness and create a friendly atmosphere.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which sentence correctly uses the idiom?',
    'options'=>[
        'I told a joke to break the ice.',
        'I broke the ice in the freezer.',
        'She broke a glass.',
        'He bought an ice cube.'
    ],
    'correct_answer'=>'I told a joke to break the ice.',
    'explanation'=>'Here, "break the ice" means making everyone feel relaxed by starting a friendly conversation, not literally breaking ice.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Breaking the ice helps people feel...',
    'options'=>[
        'Comfortable',
        'Hungry',
        'Angry',
        'Sleepy'
    ],
    'correct_answer'=>'Comfortable',
    'explanation'=>'Breaking the ice helps people feel comfortable and confident when interacting with new people.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which situation is best for breaking the ice?',
    'options'=>[
        'Meeting new classmates',
        'Sleeping',
        'Watching TV alone',
        'Cooking dinner'
    ],
    'correct_answer'=>'Meeting new classmates',
    'explanation'=>'When meeting new classmates or colleagues, breaking the ice helps begin friendly conversations and build relationships.',
    'created_at'=>now(),
    'updated_at'=>now(),
],




/*
|--------------------------------------------------------------------------
| Lesson 2 : Piece of Cake
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson2->id,
    'question'=>'What does the idiom "Piece of Cake" mean?',
    'options'=>[
        'Very easy',
        'Very delicious',
        'Very expensive',
        'Very difficult'
    ],
    'correct_answer'=>'Very easy',
    'explanation'=>'The idiom "Piece of Cake" means that something is very easy to do.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which task can be described as "a piece of cake"?',
    'options'=>[
        'Simple addition',
        'Climbing Mount Everest',
        'Building an airplane',
        'Learning 10 languages in one day'
    ],
    'correct_answer'=>'Simple addition',
    'explanation'=>'Simple addition is easy, so it can be described as "a piece of cake."',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Choose the correct sentence.',
    'options'=>[
        'The English quiz was a piece of cake.',
        'I ate a piece of homework.',
        'The cake solved my homework.',
        'My homework baked a cake.'
    ],
    'correct_answer'=>'The English quiz was a piece of cake.',
    'explanation'=>'The idiom is used correctly because it means the English quiz was very easy.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which word is closest in meaning to "Piece of Cake"?',
    'options'=>[
        'Easy',
        'Hard',
        'Impossible',
        'Dangerous'
    ],
    'correct_answer'=>'Easy',
    'explanation'=>'"Easy" is the closest meaning of the idiom "Piece of Cake."',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which of these is NOT a "Piece of Cake"?',
    'options'=>[
        'A very difficult exam',
        'Writing your name',
        'Drinking water',
        'Counting from 1 to 10'
    ],
    'correct_answer'=>'A very difficult exam',
    'explanation'=>'A very difficult exam is not easy, so it cannot be described as "a piece of cake."',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 3 : Once in a Blue Moon
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What does "Once in a Blue Moon" mean?',
    'options'=>[
        'Very rarely',
        'Every day',
        'Every week',
        'Every month'
    ],
    'correct_answer'=>'Very rarely',
    'explanation'=>'The idiom "Once in a Blue Moon" means something happens very rarely or infrequently.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Choose the correct sentence.',
    'options'=>[
        'I visit my old school once in a blue moon.',
        'I breathe once in a blue moon.',
        'The sun rises once in a blue moon.',
        'I eat breakfast once in a blue moon.'
    ],
    'correct_answer'=>'I visit my old school once in a blue moon.',
    'explanation'=>'Visiting an old school is an activity that may happen rarely, so the idiom is used correctly.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'The idiom describes something that happens...',
    'options'=>[
        'Rarely',
        'Daily',
        'Hourly',
        'Weekly'
    ],
    'correct_answer'=>'Rarely',
    'explanation'=>'The idiom refers to events that happen very infrequently.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which activity may happen once in a blue moon?',
    'options'=>[
        'Meeting a childhood friend unexpectedly',
        'Brushing your teeth',
        'Eating lunch',
        'Going to sleep'
    ],
    'correct_answer'=>'Meeting a childhood friend unexpectedly',
    'explanation'=>'Unexpectedly meeting a childhood friend is a rare event, making it a good example of this idiom.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which word is opposite in meaning?',
    'options'=>[
        'Frequently',
        'Rarely',
        'Sometimes',
        'Never'
    ],
    'correct_answer'=>'Frequently',
    'explanation'=>'"Frequently" is the opposite of "Once in a Blue Moon," which means very rarely.',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 4 : Hit the Books
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson4->id,
    'question'=>'What does "Hit the Books" mean?',
    'options'=>[
        'Start studying',
        'Throw books away',
        'Buy books',
        'Read comics'
    ],
    'correct_answer'=>'Start studying',
    'explanation'=>'The idiom "Hit the Books" means to begin studying seriously, especially before an exam.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Students usually hit the books before...',
    'options'=>[
        'Exams',
        'Vacations',
        'Birthdays',
        'Movies'
    ],
    'correct_answer'=>'Exams',
    'explanation'=>'Students usually study hard before exams to prepare well.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Choose the correct sentence.',
    'options'=>[
        'I need to hit the books tonight.',
        'I hit my books with a stick.',
        'Books hit me yesterday.',
        'I threw my books away.'
    ],
    'correct_answer'=>'I need to hit the books tonight.',
    'explanation'=>'Here, "Hit the Books" is used as an idiom meaning "I need to study tonight."',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'The idiom is related to...',
    'options'=>[
        'Studying',
        'Sports',
        'Cooking',
        'Shopping'
    ],
    'correct_answer'=>'Studying',
    'explanation'=>'"Hit the Books" is an idiom related to studying and learning.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Who is most likely to hit the books?',
    'options'=>[
        'A student',
        'A driver',
        'A chef',
        'A singer'
    ],
    'correct_answer'=>'A student',
    'explanation'=>'Students commonly "hit the books" when preparing for tests, assignments, or exams.',
    'created_at'=>now(),
    'updated_at'=>now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 5 : Better Late Than Never
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What does "Better Late Than Never" mean?',
    'options'=>[
        'Doing something late is better than never doing it',
        'Always be late',
        'Never finish work',
        'Leave work unfinished'
    ],
    'correct_answer'=>'Doing something late is better than never doing it',
    'explanation'=>'This idiom means it is better to complete something late than to never complete it at all.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Choose the correct example.',
    'options'=>[
        'He completed the course late but finished it.',
        'He never studied.',
        'He quit on the first day.',
        'He ignored all his work.'
    ],
    'correct_answer'=>'He completed the course late but finished it.',
    'explanation'=>'Finishing the course, even after a delay, is a good example of "Better Late Than Never."',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'This idiom encourages people to...',
    'options'=>[
        'Complete important tasks',
        'Avoid learning',
        'Give up easily',
        'Waste time'
    ],
    'correct_answer'=>'Complete important tasks',
    'explanation'=>'The idiom encourages people to finish important work instead of leaving it unfinished.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which sentence correctly uses the idiom?',
    'options'=>[
        'I finally apologized—better late than never.',
        'The bus is better late.',
        'Late is never better.',
        'Books are never late.'
    ],
    'correct_answer'=>'I finally apologized—better late than never.',
    'explanation'=>'The idiom is correctly used because the apology was delayed but still worthwhile.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which situation best matches the idiom?',
    'options'=>[
        'Submitting an assignment after the deadline instead of not submitting it',
        'Never submitting an assignment',
        'Ignoring your homework forever',
        'Skipping every class'
    ],
    'correct_answer'=>'Submitting an assignment after the deadline instead of not submitting it',
    'explanation'=>'Submitting late is still better than not submitting at all, which is exactly what this idiom teaches.',
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