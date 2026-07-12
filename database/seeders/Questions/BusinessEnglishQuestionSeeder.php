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
    'explanation'=>'A professional introduction should include your greeting, name, and department or job role.',
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
    'explanation'=>'Good Morning is a polite and professional greeting commonly used before noon.',
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
    'explanation'=>'A professional introduction usually includes your name and your job title or department.',
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
    'explanation'=>'This sentence is polite, respectful and suitable for a professional workplace.',
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
    'explanation'=>'Polite communication builds trust, teamwork and positive professional relationships.',
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
    'explanation'=>'A professional phone greeting includes the company name and your own introduction.',
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
    'explanation'=>'This phrase politely asks the caller to wait while maintaining professionalism.',
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
    'explanation'=>'Taking a message ensures the caller receives a response later and demonstrates professionalism.',
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
    'explanation'=>'This politely informs the caller that they are being connected to the appropriate department.',
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
    'explanation'=>'Ending with appreciation and a polite closing leaves a positive professional impression.',
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
    'explanation'=>'A clear subject line helps the recipient understand the purpose of the email before opening it.',
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
    'explanation'=>'Formal emails begin with respectful greetings such as "Dear Mr. Sharma".',
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
    'explanation'=>'Professional email closings include phrases like "Kind Regards", "Best Regards" or "Sincerely".',
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
    'explanation'=>'Business emails should always maintain a respectful, clear and professional tone.',
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
    'explanation'=>'The subject line briefly describes what the email is about, making it easier to organize and prioritize.',
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
    'explanation'=>'The meeting agenda outlines the topics to be discussed and helps keep the meeting organized.',
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
    'explanation'=>'This phrase respectfully expresses your opinion while encouraging discussion.',
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
    'explanation'=>'Agreeing politely shows respect and promotes positive teamwork.',
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
    'explanation'=>'Active listening and note-taking help you understand discussions and remember important decisions.',
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
    'explanation'=>'Meeting minutes provide a written record of discussions, decisions and assigned tasks.',
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
    'explanation'=>'Interviewers often begin by asking you to introduce yourself and summarize your background.',
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
    'explanation'=>'Employers value candidates who are confident, respectful and professional.',
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
    'explanation'=>'Providing honest strengths with real examples demonstrates self-awareness and credibility.',
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
    'explanation'=>'Clear, polite and well-structured answers create a positive impression during interviews.',
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
    'explanation'=>'Ending with gratitude demonstrates professionalism and appreciation for the interviewer\'s time.',
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