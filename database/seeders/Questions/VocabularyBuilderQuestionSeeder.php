<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class VocabularyBuilderQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',5)
            ->where('title','Common Daily Words')
            ->first();

        $lesson2 = Lesson::where('course_id',5)
            ->where('title','Colors')
            ->first();

        $lesson3 = Lesson::where('course_id',5)
            ->where('title','Days and Months')
            ->first();

        $lesson4 = Lesson::where('course_id',5)
            ->where('title','Animals')
            ->first();

        $lesson5 = Lesson::where('course_id',5)
            ->where('title','Fruits and Vegetables')
            ->first();

        $questions = [

           
[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which word is commonly used every day?',
    'options'=>[
        'Water',
        'Galaxy',
        'Rocket',
        'Planet'
    ],
    'correct_answer'=>'Water',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which word refers to something we read?',
    'options'=>[
        'Book',
        'Chair',
        'Bottle',
        'Shoes'
    ],
    'correct_answer'=>'Book',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which word is used for sitting?',
    'options'=>[
        'Chair',
        'Pen',
        'Water',
        'Food'
    ],
    'correct_answer'=>'Chair',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which word is used for writing?',
    'options'=>[
        'Pen',
        'House',
        'Food',
        'School'
    ],
    'correct_answer'=>'Pen',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Choose the correct daily word.',
    'options'=>[
        'House',
        'Satellite',
        'Volcano',
        'Jupiter'
    ],
    'correct_answer'=>'House',
    'created_at'=>now(),
    'updated_at'=>now(),
],



         
[
    'lesson_id'=>$lesson2->id,
    'question'=>'What is the color of an apple in the lesson example?',
    'options'=>[
        'Red',
        'Blue',
        'Black',
        'White'
    ],
    'correct_answer'=>'Red',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'What color is the sky?',
    'options'=>[
        'Blue',
        'Green',
        'Yellow',
        'Pink'
    ],
    'correct_answer'=>'Blue',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which bag color is mentioned in the lesson?',
    'options'=>[
        'Green',
        'Orange',
        'Black',
        'White'
    ],
    'correct_answer'=>'Green',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which one is a color?',
    'options'=>[
        'Yellow',
        'Dog',
        'Table',
        'Book'
    ],
    'correct_answer'=>'Yellow',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which color is NOT listed in the lesson?',
    'options'=>[
        'Purple',
        'Red',
        'Blue',
        'Pink'
    ],
    'correct_answer'=>'Purple',
    'created_at'=>now(),
    'updated_at'=>now(),
],



       
[
    'lesson_id'=>$lesson3->id,
    'question'=>'How many days are there in a week?',
    'options'=>[
        '7',
        '5',
        '6',
        '8'
    ],
    'correct_answer'=>'7',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which day comes after Monday?',
    'options'=>[
        'Tuesday',
        'Wednesday',
        'Friday',
        'Sunday'
    ],
    'correct_answer'=>'Tuesday',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which month comes after February?',
    'options'=>[
        'March',
        'April',
        'January',
        'May'
    ],
    'correct_answer'=>'March',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which is the first month of the year?',
    'options'=>[
        'January',
        'March',
        'June',
        'December'
    ],
    'correct_answer'=>'January',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which day comes before Sunday?',
    'options'=>[
        'Saturday',
        'Friday',
        'Monday',
        'Thursday'
    ],
    'correct_answer'=>'Saturday',
    'created_at'=>now(),
    'updated_at'=>now(),
],



[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which animal is known as the king of the jungle?',
    'options'=>[
        'Lion',
        'Cow',
        'Dog',
        'Monkey'
    ],
    'correct_answer'=>'Lion',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which animal barks?',
    'options'=>[
        'Dog',
        'Cat',
        'Horse',
        'Cow'
    ],
    'correct_answer'=>'Dog',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which animal is the largest land animal?',
    'options'=>[
        'Elephant',
        'Horse',
        'Tiger',
        'Monkey'
    ],
    'correct_answer'=>'Elephant',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which animal is commonly kept as a pet?',
    'options'=>[
        'Cat',
        'Lion',
        'Tiger',
        'Elephant'
    ],
    'correct_answer'=>'Cat',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which animal runs fast and is often used for riding?',
    'options'=>[
        'Horse',
        'Dog',
        'Monkey',
        'Cow'
    ],
    'correct_answer'=>'Horse',
    'created_at'=>now(),
    'updated_at'=>now(),
],
         


         [
    'lesson_id'=>$lesson5->id,
    'question'=>'Which of these is a fruit?',
    'options'=>[
        'Apple',
        'Potato',
        'Onion',
        'Carrot'
    ],
    'correct_answer'=>'Apple',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which fruit is called the king of fruits?',
    'options'=>[
        'Mango',
        'Banana',
        'Orange',
        'Apple'
    ],
    'correct_answer'=>'Mango',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which of these is a vegetable?',
    'options'=>[
        'Tomato',
        'Banana',
        'Apple',
        'Orange'
    ],
    'correct_answer'=>'Tomato',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which vegetable is commonly orange in color?',
    'options'=>[
        'Carrot',
        'Potato',
        'Onion',
        'Tomato'
    ],
    'correct_answer'=>'Carrot',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which sentence is correct according to the lesson?',
    'options'=>[
        'I like mangoes.',
        'I drink carrots.',
        'The apple is barking.',
        'The onion is flying.'
    ],
    'correct_answer'=>'I like mangoes.',
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