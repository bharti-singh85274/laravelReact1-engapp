<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Lesson;
use App\Models\Question;

class BusinessEnglishQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',7)
            ->where('title','Office Introduction')
            ->first();

        $lesson2 = Lesson::where('course_id',7)
            ->where('title','Telephone Conversation')
            ->first();

        $lesson3 = Lesson::where('course_id',7)
            ->where('title','Writing Professional Emails')
            ->first();

        $lesson4 = Lesson::where('course_id',7)
            ->where('title','Attending Meetings')
            ->first();

        $lesson5 = Lesson::where('course_id',7)
            ->where('title','Job Interview')
            ->first();

        $questions = [


        /*
|--------------------------------------------------------------------------
| Lesson 1 : Office Introduction
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson1->id,
    'question'=>'What is the best way to introduce yourself in an office?',
    'options'=>[
        'Hello, I am Rahul from the Sales Department.',
        'Who are you?',
        'Move aside.',
        'I do not work here.'
    ],
    'correct_answer'=>'Hello, I am Rahul from the Sales Department.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which greeting is appropriate in a professional workplace?',
    'options'=>[
        'Good Morning',
        'Yo!',
        'What\'s up?',
        'Hey Buddy!'
    ],
    'correct_answer'=>'Good Morning',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'What information is usually included when introducing yourself?',
    'options'=>[
        'Name and job role',
        'Favorite movie',
        'Weekend plans',
        'Hobbies only'
    ],
    'correct_answer'=>'Name and job role',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Which sentence sounds professional?',
    'options'=>[
        'Nice to meet you. I look forward to working with you.',
        'Leave me alone.',
        'You must help me.',
        'Do not talk to me.'
    ],
    'correct_answer'=>'Nice to meet you. I look forward to working with you.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson1->id,
    'question'=>'Being polite during office introductions helps to...',
    'options'=>[
        'Build good professional relationships',
        'Create misunderstandings',
        'Avoid teamwork',
        'Confuse colleagues'
    ],
    'correct_answer'=>'Build good professional relationships',
    'created_at'=>now(),
    'updated_at'=>now(),
],


/*
|--------------------------------------------------------------------------
| Lesson 2 : Telephone Conversation
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson2->id,
    'question'=>'How should you answer a professional office phone call?',
    'options'=>[
        'Good morning, ABC Company. This is Rahul speaking.',
        'Hello!',
        'Who is this?',
        'Yes?'
    ],
    'correct_answer'=>'Good morning, ABC Company. This is Rahul speaking.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which phrase is polite when asking someone to wait on the phone?',
    'options'=>[
        'Could you please hold for a moment?',
        'Wait.',
        'Do not speak.',
        'Call later.'
    ],
    'correct_answer'=>'Could you please hold for a moment?',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'What should you do if the person is unavailable?',
    'options'=>[
        'Take a message',
        'Hang up immediately',
        'Ignore the call',
        'Switch off the phone'
    ],
    'correct_answer'=>'Take a message',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'Which sentence is appropriate for transferring a call?',
    'options'=>[
        'I will transfer your call to the Sales Department.',
        'Call someone else.',
        'Wrong number.',
        'I cannot help you.'
    ],
    'correct_answer'=>'I will transfer your call to the Sales Department.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson2->id,
    'question'=>'How should you end a business phone call?',
    'options'=>[
        'Thank you for calling. Have a nice day.',
        'Bye.',
        'Okay.',
        'Finished.'
    ],
    'correct_answer'=>'Thank you for calling. Have a nice day.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 3 : Writing Professional Emails
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What should every professional email include?',
    'options'=>[
        'A clear subject line',
        'Funny jokes',
        'Random emojis',
        'Personal photos'
    ],
    'correct_answer'=>'A clear subject line',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which greeting is appropriate for a formal email?',
    'options'=>[
        'Dear Mr. Sharma,',
        'Hey Buddy!',
        'Hi Dude!',
        'Yo!'
    ],
    'correct_answer'=>'Dear Mr. Sharma,',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'How should a professional email end?',
    'options'=>[
        'Kind Regards',
        'See ya',
        'Bye Bye',
        'Catch you later'
    ],
    'correct_answer'=>'Kind Regards',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'Which tone should be used in a business email?',
    'options'=>[
        'Polite and professional',
        'Funny and sarcastic',
        'Angry',
        'Very casual'
    ],
    'correct_answer'=>'Polite and professional',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson3->id,
    'question'=>'What is the purpose of the subject line?',
    'options'=>[
        'To summarize the email topic',
        'To greet the reader',
        'To end the email',
        'To add emojis'
    ],
    'correct_answer'=>'To summarize the email topic',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 4 : Attending Meetings
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson4->id,
    'question'=>'What is usually discussed at the beginning of a meeting?',
    'options'=>[
        'The meeting agenda',
        'Weekend plans',
        'Favorite movies',
        'Personal hobbies'
    ],
    'correct_answer'=>'The meeting agenda',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Which phrase is appropriate when giving your opinion in a meeting?',
    'options'=>[
        'I think we should consider this option.',
        'You are all wrong.',
        'Be quiet.',
        'I do not care.'
    ],
    'correct_answer'=>'I think we should consider this option.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'How can you politely agree with someone in a meeting?',
    'options'=>[
        'I completely agree with your point.',
        'You are mistaken.',
        'That is nonsense.',
        'Stop talking.'
    ],
    'correct_answer'=>'I completely agree with your point.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'What should you do while attending a meeting?',
    'options'=>[
        'Listen carefully and take notes',
        'Interrupt everyone',
        'Use your phone continuously',
        'Leave without informing anyone'
    ],
    'correct_answer'=>'Listen carefully and take notes',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson4->id,
    'question'=>'Why are meeting minutes important?',
    'options'=>[
        'They record important decisions and action items',
        'They make meetings longer',
        'They replace attendance',
        'They are only for managers'
    ],
    'correct_answer'=>'They record important decisions and action items',
    'created_at'=>now(),
    'updated_at'=>now(),
],

/*
|--------------------------------------------------------------------------
| Lesson 5 : Job Interview
|--------------------------------------------------------------------------
*/

[
    'lesson_id'=>$lesson5->id,
    'question'=>'What is usually the first question in a job interview?',
    'options'=>[
        'Tell me about yourself.',
        'What is your favorite movie?',
        'Do you like cricket?',
        'Where do you shop?'
    ],
    'correct_answer'=>'Tell me about yourself.',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'Which quality should you show during a job interview?',
    'options'=>[
        'Confidence and professionalism',
        'Rudeness',
        'Laziness',
        'Overconfidence'
    ],
    'correct_answer'=>'Confidence and professionalism',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'If an interviewer asks about your strengths, you should...',
    'options'=>[
        'Explain your skills honestly with examples',
        'Say you have no strengths',
        'Change the topic',
        'Remain silent'
    ],
    'correct_answer'=>'Explain your skills honestly with examples',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'How should you answer interview questions?',
    'options'=>[
        'Clearly and politely',
        'Very loudly',
        'With one-word answers only',
        'By avoiding eye contact'
    ],
    'correct_answer'=>'Clearly and politely',
    'created_at'=>now(),
    'updated_at'=>now(),
],

[
    'lesson_id'=>$lesson5->id,
    'question'=>'How should you end a job interview?',
    'options'=>[
        'Thank you for your time and consideration.',
        'Okay, bye.',
        'I am leaving now.',
        'Nothing.'
    ],
    'correct_answer'=>'Thank you for your time and consideration.',
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