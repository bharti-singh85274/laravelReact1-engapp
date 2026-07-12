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
        'options' => ['24', '25', '26', '28'],
        'correct_answer' => '26',
        'explanation' => 'The English alphabet contains 26 letters from A to Z.'
    ],

    [
        'question' => 'Which letter comes after C?',
        'options' => ['B', 'D', 'E', 'F'],
        'correct_answer' => 'D',
        'explanation' => 'The alphabetical order is A, B, C, D, E, F. Therefore, D comes after C.'
    ],

    [
        'question' => 'Which is the first letter of the alphabet?',
        'options' => ['A', 'B', 'C', 'Z'],
        'correct_answer' => 'A',
        'explanation' => 'The English alphabet always starts with the letter A.'
    ],

    [
        'question' => 'Which of these is a vowel?',
        'options' => ['B', 'D', 'A', 'G'],
        'correct_answer' => 'A',
        'explanation' => 'The vowels in English are A, E, I, O and U.'
    ],

    [
        'question' => 'How many vowels are there?',
        'options' => ['3', '4', '5', '6'],
        'correct_answer' => '5',
        'explanation' => 'English has five vowels: A, E, I, O and U.'
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
        'correct_answer' => 'Good Morning',
        'explanation' => 'Good Morning is the appropriate greeting used from morning until around noon.'
    ],

    [
        'question' => 'Which greeting is suitable in the evening?',
        'options' => [
            'Good Evening',
            'Good Morning',
            'Hello Morning',
            'Good Day'
        ],
        'correct_answer' => 'Good Evening',
        'explanation' => 'Good Evening is the correct greeting used during the evening.'
    ],

    [
        'question' => 'What do you say when meeting someone?',
        'options' => [
            'Hello',
            'Goodbye',
            'Sorry',
            'Excuse me'
        ],
        'correct_answer' => 'Hello',
        'explanation' => 'Hello is the most common greeting used when meeting someone.'
    ],

    [
        'question' => 'Which word is an informal greeting?',
        'options' => [
            'Hi',
            'Sorry',
            'Please',
            'Thanks'
        ],
        'correct_answer' => 'Hi',
        'explanation' => 'Hi is a friendly and informal greeting.'
    ],

    [
        'question' => 'Which greeting is based on time?',
        'options' => [
            'Good Morning',
            'Hi',
            'Hello',
            'Hey'
        ],
        'correct_answer' => 'Good Morning',
        'explanation' => 'Greetings like Good Morning, Good Afternoon and Good Evening depend on the time of day.'
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
        'correct_answer' => 'My name is Rahul.',
        'explanation' => 'When introducing yourself, you usually say "My name is..." followed by your name.'
    ],

    [
        'question' => 'Which sentence tells your hometown?',
        'options' => [
            'I am from Delhi.',
            'I like apples.',
            'I play cricket.',
            'Good Morning.'
        ],
        'correct_answer' => 'I am from Delhi.',
        'explanation' => 'The sentence "I am from..." is used to tell others where you come from.'
    ],

    [
        'question' => 'Which sentence tells your occupation?',
        'options' => [
            'I am a student.',
            'I have a pen.',
            'Nice to meet you.',
            'Hello.'
        ],
        'correct_answer' => 'I am a student.',
        'explanation' => 'The pattern "I am a..." is commonly used to describe your profession or occupation.'
    ],

    [
        'question' => 'Which phrase is polite after introducing yourself?',
        'options' => [
            'Nice to meet you.',
            'Go away.',
            'Never mind.',
            'No problem.'
        ],
        'correct_answer' => 'Nice to meet you.',
        'explanation' => 'After introducing yourself, it is polite to say "Nice to meet you."'
    ],

    [
        'question' => 'Which sentence starts an introduction?',
        'options' => [
            'Hello.',
            'Bye.',
            'Later.',
            'Good Night.'
        ],
        'correct_answer' => 'Hello.',
        'explanation' => 'A friendly greeting like "Hello" is a good way to begin an introduction.'
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
        'correct_answer' => 'Father',
        'explanation' => 'Your mother\'s husband is your father.'
    ],

    [
        'question' => "Your father's daughter is your?",
        'options' => [
            'Sister',
            'Mother',
            'Aunt',
            'Teacher'
        ],
        'correct_answer' => 'Sister',
        'explanation' => 'Your father\'s daughter is your sister (or yourself if you are female).'
    ],

    [
        'question' => "Who is your father's father?",
        'options' => [
            'Grandfather',
            'Brother',
            'Friend',
            'Teacher'
        ],
        'correct_answer' => 'Grandfather',
        'explanation' => 'Your father\'s father is called your grandfather.'
    ],

    [
        'question' => 'Who cooks food in the lesson example?',
        'options' => [
            'Mother',
            'Brother',
            'Friend',
            'Teacher'
        ],
        'correct_answer' => 'Mother',
        'explanation' => 'In the lesson example, the mother prepares and cooks the food.'
    ],

    [
        'question' => 'Which is a family member?',
        'options' => [
            'Sister',
            'Doctor',
            'Police',
            'Driver'
        ],
        'correct_answer' => 'Sister',
        'explanation' => 'A sister is a member of your family, while the others are professions.'
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
        'correct_answer' => 'Five',
        'explanation' => 'Numbers are counted as One, Two, Three, Four, Five. Therefore, Five comes after Four.'
    ],

    [
        'question' => 'How do you write 2 in words?',
        'options' => [
            'Two',
            'Three',
            'One',
            'Four'
        ],
        'correct_answer' => 'Two',
        'explanation' => 'The number 2 is written as "Two".'
    ],

    [
        'question' => 'How many books are in the example sentence?',
        'options' => [
            'Two',
            'Three',
            'Four',
            'Five'
        ],
        'correct_answer' => 'Two',
        'explanation' => 'The example sentence mentions two books, so the correct answer is Two.'
    ],

    [
        'question' => 'Which is the correct spelling?',
        'options' => [
            'Three',
            'Thre',
            'Tree',
            'Thrie'
        ],
        'correct_answer' => 'Three',
        'explanation' => 'The correct spelling of the number is "Three".'
    ],

    [
        'question' => 'Which number comes before Five?',
        'options' => [
            'Four',
            'Six',
            'Three',
            'Two'
        ],
        'correct_answer' => 'Four',
        'explanation' => 'The counting order is One, Two, Three, Four, Five. Therefore, Four comes before Five.'
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
            'options'         => $question['options'],
            'correct_answer'  => $question['correct_answer'],
            'explanation'     => $question['explanation'],
        ]

    );

}

    }
}