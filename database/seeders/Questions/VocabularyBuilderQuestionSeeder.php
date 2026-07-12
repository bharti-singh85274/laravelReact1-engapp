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

 /*
|--------------------------------------------------------------------------
| Lesson 1 : Common Daily Words
|--------------------------------------------------------------------------
*/

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
    'explanation'=>'Water is an essential daily-use word because people use and talk about water every day.',
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
    'explanation'=>'A book is something we read to gain knowledge, information, or entertainment.',
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
    'explanation'=>'A chair is a piece of furniture designed for sitting.',
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
    'explanation'=>'A pen is a common writing tool used to write on paper.',
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
    'explanation'=>'A house is a common everyday word because it refers to the place where people live.',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 2 : Colors
|--------------------------------------------------------------------------
*/

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
    'explanation'=>'Apples are commonly shown as red in beginner English lessons, making "Red" the expected answer.',
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
    'explanation'=>'During a clear day, the sky appears blue because of the scattering of sunlight in the atmosphere.',
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
    'explanation'=>'The lesson uses a green bag as an example to help learners remember color vocabulary.',
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
    'explanation'=>'Yellow is a color, while the other options are objects or animals.',
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
    'explanation'=>'Purple is not included in this lesson, while Red, Blue, and Pink are covered.',
    'created_at'=>now(),
    'updated_at'=>now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 3 : Days and Months
|--------------------------------------------------------------------------
*/

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
    'explanation'=>'A week has seven days: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, and Sunday.',
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
    'explanation'=>'Tuesday is the second day of the week and comes immediately after Monday.',
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
    'explanation'=>'March is the third month of the year and follows February.',
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
    'explanation'=>'January is the first month in the Gregorian calendar.',
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
    'explanation'=>'Saturday is the day immediately before Sunday.',
    'created_at'=>now(),
    'updated_at'=>now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 4 : Animals
|--------------------------------------------------------------------------
*/

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
    'explanation'=>'The lion is commonly called the "King of the Jungle" because it symbolizes strength, courage, and leadership.',
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
    'explanation'=>'Dogs communicate by barking, while cats meow, cows moo, and horses neigh.',
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
    'explanation'=>'The elephant is the largest living land animal in the world.',
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
    'explanation'=>'Cats are one of the most common household pets because they are friendly and easy to care for.',
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
    'explanation'=>'Horses are fast animals that have been used for riding and transportation for thousands of years.',
    'created_at'=>now(),
    'updated_at'=>now(),
],
         
/*
|--------------------------------------------------------------------------
| Lesson 5 : Fruits and Vegetables
|--------------------------------------------------------------------------
*/

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
    'explanation'=>'An apple is a fruit because it develops from the flower of a plant and contains seeds.',
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
    'explanation'=>'Mango is popularly known as the "King of Fruits" because of its rich taste, aroma, and popularity.',
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
    'explanation'=>'In this lesson, tomato is treated as a vegetable because it is commonly used in cooking, although botanically it is a fruit.',
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
    'explanation'=>'Carrots are naturally orange and are a good source of vitamin A.',
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
    'explanation'=>'This is the only meaningful and grammatically correct sentence among the options.',
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