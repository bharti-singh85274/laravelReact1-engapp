<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class DailyConversationQuestionSeeder extends Seeder
{
    public function run(): void
    {
      /*
|--------------------------------------------------------------------------
| Lesson 1 : Meeting Someone
|--------------------------------------------------------------------------
*/

$this->addQuestions('Meeting Someone', [

    [
        'question' => 'What do you usually say when meeting someone for the first time?',
        'options' => [
            'Hello',
            'Good Night',
            'Good Bye',
            'See You'
        ],
        'correct_answer' => 'Hello',
        'explanation' => 'Hello is the most common and polite greeting when meeting someone for the first time.'
    ],

    [
        'question' => 'Which sentence introduces yourself?',
        'options' => [
            'My name is Rahul.',
            'Good Night.',
            'See you later.',
            'Thank you.'
        ],
        'correct_answer' => 'My name is Rahul.',
        'explanation' => 'Introducing yourself usually begins by telling the other person your name.'
    ],

    [
        'question' => 'Which expression is polite when meeting someone?',
        'options' => [
            'Nice to meet you.',
            'Go away.',
            'Leave me alone.',
            'Be quiet.'
        ],
        'correct_answer' => 'Nice to meet you.',
        'explanation' => 'Saying "Nice to meet you" is a polite way to greet someone you have just met.'
    ],

    [
        'question' => 'Which greeting is used during the morning?',
        'options' => [
            'Good Morning',
            'Good Evening',
            'Good Night',
            'Bye'
        ],
        'correct_answer' => 'Good Morning',
        'explanation' => 'Good Morning is the appropriate greeting from morning until around noon.'
    ],

    [
        'question' => 'What is the best response to "Nice to meet you"?',
        'options' => [
            'Nice to meet you too.',
            'Good Night.',
            'No.',
            'Bye.'
        ],
        'correct_answer' => 'Nice to meet you too.',
        'explanation' => 'The polite response is "Nice to meet you too," showing mutual respect.'
    ],

]);


     /*
|--------------------------------------------------------------------------
| Lesson 2 : Talking at Home
|--------------------------------------------------------------------------
*/

$this->addQuestions('Talking at Home', [

    [
        'question' => 'What do you usually say to your parents in the morning?',
        'options' => [
            'Good Morning',
            'Good Bye',
            'See you tomorrow',
            'Congratulations'
        ],
        'correct_answer' => 'Good Morning',
        'explanation' => 'Good Morning is a polite greeting used when meeting family members or others in the morning.'
    ],

    [
        'question' => 'How do you politely offer help?',
        'options' => [
            'Can I help you?',
            'Go away.',
            'Leave it.',
            'No.'
        ],
        'correct_answer' => 'Can I help you?',
        'explanation' => 'Can I help you? is a polite and respectful way to offer assistance to someone.'
    ],

    [
        'question' => 'Which word shows gratitude?',
        'options' => [
            'Thank you',
            'Sorry',
            'Hello',
            'Please'
        ],
        'correct_answer' => 'Thank you',
        'explanation' => 'Thank you is used to express gratitude and appreciation.'
    ],

    [
        'question' => 'How do you ask about someone\'s health?',
        'options' => [
            'How are you?',
            'Where are you?',
            'Who are you?',
            'When are you?'
        ],
        'correct_answer' => 'How are you?',
        'explanation' => 'How are you? is the standard and polite way to ask about someone\'s well-being.'
    ],

    [
        'question' => 'What is a polite reply to "How are you?"',
        'options' => [
            "I'm fine.",
            "Go away.",
            "Nothing.",
            "Never."
        ],
        'correct_answer' => "I'm fine.",
        'explanation' => 'A polite response is "I\'m fine," often followed by "Thank you. How are you?"'
    ],

]);


     /*
|--------------------------------------------------------------------------
| Lesson 3 : Talking with Friends
|--------------------------------------------------------------------------
*/

$this->addQuestions('Talking with Friends', [

    [
        'question' => 'Which greeting is common among friends?',
        'options' => [
            'Hi',
            'Good Night',
            'Good Bye',
            'Congratulations'
        ],
        'correct_answer' => 'Hi',
        'explanation' => 'Hi is a friendly and informal greeting commonly used among friends.'
    ],

    [
        'question' => 'How do you ask your friend what they are doing?',
        'options' => [
            'What are you doing?',
            'Where is your bag?',
            'How old are you?',
            'What is your name?'
        ],
        'correct_answer' => 'What are you doing?',
        'explanation' => 'What are you doing? is a natural question used to ask about a friend\'s current activity.'
    ],

    [
        'question' => 'Which sentence invites a friend?',
        'options' => [
            "Let's play.",
            'Go home.',
            'Sit alone.',
            'Be quiet.'
        ],
        'correct_answer' => "Let's play.",
        'explanation' => 'Let\'s play. is a friendly invitation suggesting an activity to do together.'
    ],

    [
        'question' => 'Which reply means everything is okay?',
        'options' => [
            "I'm doing well.",
            "I don't know.",
            "Never.",
            "No."
        ],
        'correct_answer' => "I'm doing well.",
        'explanation' => 'I\'m doing well. is a polite response indicating that everything is fine.'
    ],

    [
        'question' => 'Which conversation is friendly?',
        'options' => [
            'Hi Rahul!',
            'Go away!',
            'Stop talking!',
            'Leave now!'
        ],
        'correct_answer' => 'Hi Rahul!',
        'explanation' => 'Greeting someone by saying "Hi" followed by their name is friendly and welcoming.'
    ],

]);




    /*
|--------------------------------------------------------------------------
| Lesson 4 : Shopping Conversation
|--------------------------------------------------------------------------
*/

$this->addQuestions('Shopping Conversation', [

    [
        'question' => 'How do you ask the price of an item?',
        'options' => [
            'How much is this?',
            'Where is this?',
            'Who bought this?',
            'When is this?'
        ],
        'correct_answer' => 'How much is this?',
        'explanation' => 'The question "How much is this?" is the standard and polite way to ask the price of an item.'
    ],

    [
        'question' => 'What do you say when you want to buy something?',
        'options' => [
            'Can I have this?',
            'Go away.',
            'Never.',
            'No.'
        ],
        'correct_answer' => 'Can I have this?',
        'explanation' => 'Saying "Can I have this?" is a polite way to request an item you want to purchase.'
    ],

    [
        'question' => 'How do you ask for another size?',
        'options' => [
            'Do you have another size?',
            'Give me free.',
            'Take this.',
            'I do not want.'
        ],
        'correct_answer' => 'Do you have another size?',
        'explanation' => 'This question politely asks the shopkeeper if the item is available in a different size.'
    ],

    [
        'question' => 'The shopkeeper says "It is 500 rupees." What did you ask?',
        'options' => [
            'How much is this?',
            'Where are you?',
            'Who are you?',
            'How old are you?'
        ],
        'correct_answer' => 'How much is this?',
        'explanation' => 'A shopkeeper gives the price in response to the question "How much is this?"'
    ],

    [
        'question' => 'Which sentence is polite while shopping?',
        'options' => [
            'Thank you.',
            'Move.',
            'Go.',
            'Hurry.'
        ],
        'correct_answer' => 'Thank you.',
        'explanation' => 'Saying "Thank you." shows good manners and appreciation while shopping.'
    ],

]);



      /*
|--------------------------------------------------------------------------
| Lesson 5 : Ordering Food
|--------------------------------------------------------------------------
*/

$this->addQuestions('Ordering Food', [

    [
        'question' => 'What do you ask before ordering?',
        'options' => [
            'May I see the menu?',
            'Where is your house?',
            'Who are you?',
            'Come here.'
        ],
        'correct_answer' => 'May I see the menu?',
        'explanation' => 'Asking to see the menu is the first polite step before ordering food in a restaurant.'
    ],

    [
        'question' => 'How do you order food politely?',
        'options' => [
            'I would like a sandwich.',
            'Give food.',
            'Bring now.',
            'Fast.'
        ],
        'correct_answer' => 'I would like a sandwich.',
        'explanation' => 'Using "I would like..." is a polite and respectful way to order food.'
    ],

    [
        'question' => 'How do you ask for water?',
        'options' => [
            'Can I have some water?',
            'Take water.',
            'Go away.',
            'Nothing.'
        ],
        'correct_answer' => 'Can I have some water?',
        'explanation' => 'This is the standard polite way to request water in a restaurant.'
    ],

    [
        'question' => 'What is a polite reply after ordering?',
        'options' => [
            'Thank you.',
            'Never.',
            'No.',
            'Stop.'
        ],
        'correct_answer' => 'Thank you.',
        'explanation' => 'Thanking the server shows good manners and appreciation.'
    ],

    [
        'question' => 'If the waiter asks "Anything else?", you can reply:',
        'options' => [
            'No, thank you.',
            'Go away.',
            'Nothing.',
            'Leave.'
        ],
        'correct_answer' => 'No, thank you.',
        'explanation' => 'Replying "No, thank you." politely tells the waiter that you do not need anything else.'
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
                'question' => $question['question'],
            ],

            [
                'options' => $question['options'],
                'correct_answer' => $question['correct_answer'],
                'explanation' => $question['explanation'],
            ]

        );

    }
}


}