<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $lessons = [];

        /*
        |--------------------------------------------------------------------------
        | Course 1 : Basic English
        |--------------------------------------------------------------------------
        */

       $basicEnglish = [

[
'course_id'=>1,
'title'=>'English Alphabet',
'content'=><<<TEXT
INTRODUCTION

The English alphabet has 26 letters.

EXPLANATION

Vowels:
A E I O U

Consonants:
B C D F G ...

EXAMPLES

Apple
Ball
Cat
Dog

PRACTICE

Read A to Z loudly.

SUMMARY

Practice the alphabet every day.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>1,
'title'=>'Basic Greetings',
'content'=><<<TEXT
INTRODUCTION

Greetings help us communicate politely.

EXPLANATION

Good Morning

Good Afternoon

Good Evening

Hello

Hi

EXAMPLES

Hello Sir.

Good Morning Teacher.

Hi Friends.

PRACTICE

Say Hello to your friend.

SUMMARY

Use greetings according to the time.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>1,
'title'=>'Introducing Yourself',
'content'=><<<TEXT
INTRODUCTION

Introducing yourself is important.

EXPLANATION

My name is Rahul.

I am from Delhi.

I am a student.

EXAMPLES

Hello.

My name is Rahul.

Nice to meet you.

PRACTICE

Introduce yourself in English.

SUMMARY

Practice your introduction daily.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>1,
'title'=>'Family Members',
'content'=><<<TEXT
INTRODUCTION

Learn common family words.

EXPLANATION

Father

Mother

Brother

Sister

Grandfather

Grandmother

EXAMPLES

My father is a teacher.

My mother cooks food.

PRACTICE

Describe your family.

SUMMARY

Practice family vocabulary.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>1,
'title'=>'Numbers',
'content'=><<<TEXT
INTRODUCTION

Numbers are used daily.

EXPLANATION

One

Two

Three

Four

Five

EXAMPLES

I have two books.

There are five students.

PRACTICE

Count from 1 to 20.

SUMMARY

Practice numbers every day.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];

        
    

        /*
|--------------------------------------------------------------------------
| Course 2 : Daily Conversation
|--------------------------------------------------------------------------
*/

$dailyConversation = [

[
'course_id'=>2,
'title'=>'Meeting Someone',
'content'=><<<TEXT
INTRODUCTION

Meeting new people is an important part of everyday communication.

EXPLANATION

Use these expressions:

Hello.

Hi.

Good Morning.

Nice to meet you.

My name is ______.

EXAMPLES

Hello, I'm Rahul.

Hi, my name is Priya.

Nice to meet you.

PRACTICE

Introduce yourself in English.

SUMMARY

Always greet people politely and introduce yourself confidently.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>2,
'title'=>'Talking at Home',
'content'=><<<TEXT
INTRODUCTION

Practice simple English conversations with your family.

EXPLANATION

Good morning.

How are you?

I'm fine.

Can I help you?

Thank you.

EXAMPLES

Good morning Mom.

Can I help you?

Thank you.

PRACTICE

Speak five English sentences at home.

SUMMARY

Practice English with your family every day.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>2,
'title'=>'Talking with Friends',
'content'=><<<TEXT
INTRODUCTION

Friends are great partners for practicing English.

EXPLANATION

Hi!

How are you?

What are you doing?

Let's play.

EXAMPLES

Hi Rahul.

I'm doing well.

Let's play cricket.

PRACTICE

Talk with a friend in English for two minutes.

SUMMARY

Use English during everyday conversations with friends.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>2,
'title'=>'Shopping Conversation',
'content'=><<<TEXT
INTRODUCTION

Shopping conversations help in daily life.

EXPLANATION

How much is this?

Can I have this?

Do you have another size?

EXAMPLES

How much is this shirt?

It is 500 rupees.

PRACTICE

Practice buying clothes in English.

SUMMARY

Use polite expressions while shopping.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>2,
'title'=>'Ordering Food',
'content'=><<<TEXT
INTRODUCTION

Ordering food is one of the most common conversations.

EXPLANATION

May I see the menu?

I would like a sandwich.

Can I have some water?

EXAMPLES

I'd like a pizza.

Anything else?

No, thank you.

PRACTICE

Order your favorite meal in English.

SUMMARY

Practice restaurant conversations confidently.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];




/*
|--------------------------------------------------------------------------
| Course 3 : Grammar Basics
|--------------------------------------------------------------------------
*/

$grammarBasics = [

[
'course_id'=>3,
'title'=>'What is Grammar?',
'content'=><<<TEXT
INTRODUCTION

Grammar is the set of rules that helps us speak and write English correctly.

EXPLANATION

Grammar tells us how to arrange words into meaningful sentences.

Correct grammar makes communication easy.

EXAMPLES

I am a student.

She is happy.

They play football.

PRACTICE

Write three correct English sentences.

SUMMARY

Grammar helps us communicate clearly.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>3,
'title'=>'Parts of Speech',
'content'=><<<TEXT
INTRODUCTION

Every English word belongs to a part of speech.

EXPLANATION

The eight parts of speech are:

Noun

Pronoun

Verb

Adjective

Adverb

Preposition

Conjunction

Interjection

EXAMPLES

Rahul plays cricket.

She is intelligent.

Wow! That's amazing.

PRACTICE

Identify the parts of speech in five sentences.

SUMMARY

Knowing parts of speech improves grammar.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>3,
'title'=>'Nouns',
'content'=><<<TEXT
INTRODUCTION

A noun is the name of a person, place, animal or thing.

EXPLANATION

Examples of nouns:

Person - Teacher

Place - School

Animal - Dog

Thing - Book

EXAMPLES

Rahul is reading a book.

The dog is running.

PRACTICE

Write ten nouns around you.

SUMMARY

Nouns name people, places, animals and things.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>3,
'title'=>'Pronouns',
'content'=><<<TEXT
INTRODUCTION

Pronouns replace nouns.

EXPLANATION

Common pronouns:

I

You

He

She

It

We

They

EXAMPLES

Rahul is a student.

He studies English.

PRACTICE

Replace nouns with suitable pronouns.

SUMMARY

Pronouns avoid repeating nouns.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>3,
'title'=>'Verbs',
'content'=><<<TEXT
INTRODUCTION

A verb shows an action or state.

EXPLANATION

Examples:

Run

Eat

Write

Sleep

Think

EXAMPLES

She writes well.

They play football.

PRACTICE

Write ten action verbs.

SUMMARY

Every sentence usually contains a verb.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];



/*
|--------------------------------------------------------------------------
| Course 4 : English Tenses
|--------------------------------------------------------------------------
*/

$englishTenses = [

[
'course_id'=>4,
'title'=>'Introduction to Tenses',
'content'=><<<TEXT
INTRODUCTION

Tenses tell us when an action happens.

EXPLANATION

There are three main tenses:

Present

Past

Future

Each has four forms.

EXAMPLES

I play cricket.

I played cricket.

I will play cricket.

PRACTICE

Write one sentence in each tense.

SUMMARY

Tenses show the time of an action.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>4,
'title'=>'Simple Present Tense',
'content'=><<<TEXT
INTRODUCTION

The Simple Present describes habits and facts.

EXPLANATION

Structure:

Subject + Verb + Object

EXAMPLES

I study English.

She goes to school.

The sun rises in the east.

PRACTICE

Write five sentences about your daily routine.

SUMMARY

Use Simple Present for habits and universal truths.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>4,
'title'=>'Present Continuous Tense',
'content'=><<<TEXT
INTRODUCTION

This tense describes actions happening now.

EXPLANATION

Structure:

Subject + is/am/are + Verb-ing

EXAMPLES

I am studying.

She is cooking.

They are playing.

PRACTICE

Describe what your family members are doing now.

SUMMARY

Use Present Continuous for ongoing actions.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>4,
'title'=>'Simple Past Tense',
'content'=><<<TEXT
INTRODUCTION

Simple Past describes completed actions.

EXPLANATION

Structure:

Subject + Verb (2nd form)

EXAMPLES

I visited Delhi.

She watched a movie.

We played football.

PRACTICE

Write five sentences about yesterday.

SUMMARY

Use Simple Past for finished actions.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>4,
'title'=>'Simple Future Tense',
'content'=><<<TEXT
INTRODUCTION

Simple Future talks about future plans.

EXPLANATION

Structure:

Subject + will + Verb

EXAMPLES

I will study tomorrow.

She will visit Jaipur.

They will play cricket.

PRACTICE

Write five future plans.

SUMMARY

Use Future Tense for upcoming actions.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];



/*
|--------------------------------------------------------------------------
| Course 5 : Vocabulary Builder
|--------------------------------------------------------------------------
*/

$vocabularyBuilder = [

[
'course_id'=>5,
'title'=>'Common Daily Words',
'content'=><<<TEXT
INTRODUCTION

Learning common words helps you speak English every day.

EXPLANATION

Some useful words:

Water

Food

House

School

Book

Pen

Chair

Table

EXAMPLES

I drink water.

This is my book.

The chair is blue.

PRACTICE

Write ten common words used in your home.

SUMMARY

Learn and use common words every day.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>5,
'title'=>'Colors',
'content'=><<<TEXT
INTRODUCTION

Colors are used to describe objects.

EXPLANATION

Red

Blue

Green

Yellow

Black

White

Pink

Orange

EXAMPLES

The apple is red.

The sky is blue.

She has a green bag.

PRACTICE

Name ten objects around you with their colors.

SUMMARY

Practice color names in daily conversations.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>5,
'title'=>'Days and Months',
'content'=><<<TEXT
INTRODUCTION

Days and months are important for communication.

EXPLANATION

Days:

Monday

Tuesday

Wednesday

Thursday

Friday

Saturday

Sunday

Months:

January

February

March

April

...

EXAMPLES

Today is Monday.

My birthday is in July.

PRACTICE

Say today's day and month in English.

SUMMARY

Remember all days and months.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>5,
'title'=>'Animals',
'content'=><<<TEXT
INTRODUCTION

Animal names are useful in everyday English.

EXPLANATION

Dog

Cat

Lion

Tiger

Elephant

Monkey

Horse

Cow

EXAMPLES

The dog is barking.

The lion is strong.

The horse is running.

PRACTICE

Name ten animals in English.

SUMMARY

Practice animal names daily.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>5,
'title'=>'Fruits and Vegetables',
'content'=><<<TEXT
INTRODUCTION

Learn names of common fruits and vegetables.

EXPLANATION

Apple

Banana

Orange

Mango

Potato

Tomato

Onion

Carrot

EXAMPLES

I like mangoes.

The tomato is fresh.

She bought carrots.

PRACTICE

List five fruits and five vegetables in English.

SUMMARY

Use these words while shopping and cooking.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];


/*
|--------------------------------------------------------------------------
| Course 6 : Idioms & Phrases
|--------------------------------------------------------------------------
*/

$idiomsPhrases = [

[
'course_id'=>6,
'title'=>'Break the Ice',
'content'=><<<TEXT
INTRODUCTION

An idiom is a phrase whose meaning is different from the literal meaning of the words.

EXPLANATION

"Break the ice" means to start a friendly conversation in a new or uncomfortable situation.

EXAMPLES

I told a joke to break the ice.

She smiled to break the ice during the meeting.

PRACTICE

Write two situations where you can use "break the ice".

SUMMARY

Use "break the ice" when starting conversations.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>6,
'title'=>'Piece of Cake',
'content'=><<<TEXT
INTRODUCTION

English speakers often use idioms instead of literal expressions.

EXPLANATION

"Piece of cake" means something is very easy.

EXAMPLES

The test was a piece of cake.

Cooking noodles is a piece of cake.

PRACTICE

Write three things that are a piece of cake for you.

SUMMARY

Use "piece of cake" for easy tasks.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>6,
'title'=>'Once in a Blue Moon',
'content'=><<<TEXT
INTRODUCTION

Some idioms describe how often something happens.

EXPLANATION

"Once in a blue moon" means something happens very rarely.

EXAMPLES

I eat pizza once in a blue moon.

He visits us once in a blue moon.

PRACTICE

Write two sentences using this idiom.

SUMMARY

Use this idiom for rare events.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>6,
'title'=>'Hit the Books',
'content'=><<<TEXT
INTRODUCTION

Many idioms are used in education.

EXPLANATION

"Hit the books" means to begin studying seriously.

EXAMPLES

I have an exam tomorrow, so I must hit the books.

She hit the books after dinner.

PRACTICE

Write your own example using "hit the books".

SUMMARY

Use this idiom when talking about studying.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>6,
'title'=>'Better Late Than Never',
'content'=><<<TEXT
INTRODUCTION

This idiom encourages people to do something even if it is delayed.

EXPLANATION

"Better late than never" means it is better to do something late than not do it at all.

EXAMPLES

He started learning English at forty. Better late than never.

She finally apologized. Better late than never.

PRACTICE

Write two situations where this idiom fits.

SUMMARY

Never hesitate to start learning.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];


/*
|--------------------------------------------------------------------------
| Course 7 : Business English
|--------------------------------------------------------------------------
*/

$businessEnglish = [

[
'course_id'=>7,
'title'=>'Office Introduction',
'content'=><<<TEXT
INTRODUCTION

Professional introductions create a good first impression at work.

EXPLANATION

Useful expressions:

Good morning.

My name is ______.

I work as a ______.

Nice to meet you.

EXAMPLES

Good morning everyone.

My name is Rahul.

I work as a Software Developer.

Nice to meet you all.

PRACTICE

Introduce yourself as if you are joining a new company.

SUMMARY

Speak clearly and confidently while introducing yourself.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>7,
'title'=>'Telephone Conversation',
'content'=><<<TEXT
INTRODUCTION

Telephone communication is important in every workplace.

EXPLANATION

Useful expressions:

Hello.

May I speak with Mr. Sharma?

Please hold on.

I'll call you back.

EXAMPLES

Hello, this is Rahul speaking.

May I speak with Mr. Verma?

Certainly.

PRACTICE

Practice a phone conversation with a partner.

SUMMARY

Always be polite during business calls.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>7,
'title'=>'Writing Professional Emails',
'content'=><<<TEXT
INTRODUCTION

Professional emails should be clear and polite.

EXPLANATION

Start with:

Dear Sir/Madam,

State your purpose.

End with:

Thank you.

Regards,

EXAMPLES

Dear Manager,

Please find the attached report.

Regards,
Rahul

PRACTICE

Write a short leave application email.

SUMMARY

Keep emails simple, polite and professional.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>7,
'title'=>'Attending Meetings',
'content'=><<<TEXT
INTRODUCTION

Meetings are an important part of office communication.

EXPLANATION

Useful phrases:

I agree.

I have a suggestion.

Could you explain that again?

Thank you for your opinion.

EXAMPLES

I agree with your idea.

Could you explain the last point?

PRACTICE

Practice speaking during a mock meeting.

SUMMARY

Listen carefully and speak confidently.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>7,
'title'=>'Job Interview',
'content'=><<<TEXT
INTRODUCTION

Interview skills help you get a good job.

EXPLANATION

Common questions:

Tell me about yourself.

Why should we hire you?

What are your strengths?

EXAMPLES

I am a hardworking and quick learner.

I enjoy solving problems.

PRACTICE

Answer five common interview questions.

SUMMARY

Prepare well and answer confidently.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];


/*
|--------------------------------------------------------------------------
| Course 8 : English Practice
|--------------------------------------------------------------------------
*/

$englishPractice = [

[
'course_id'=>8,
'title'=>'Daily Speaking Practice',
'content'=><<<TEXT
INTRODUCTION

Speaking English every day improves confidence and fluency.

EXPLANATION

Choose a simple topic and speak for two minutes.

Examples:

Myself

My Family

My School

My Job

My Hobbies

EXAMPLES

Hello, my name is Rahul.

I live in Delhi.

I enjoy reading books.

PRACTICE

Speak for two minutes about yourself without stopping.

SUMMARY

Daily speaking practice builds confidence.
TEXT,
'video_url'=>null,
'order'=>1,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>8,
'title'=>'Reading Practice',
'content'=><<<TEXT
INTRODUCTION

Reading improves pronunciation and vocabulary.

EXPLANATION

Read slowly.

Pronounce each word clearly.

Don't rush.

Read aloud every day.

EXAMPLES

The sun rises in the east.

Learning English is fun.

Practice makes perfect.

PRACTICE

Read one English paragraph aloud.

SUMMARY

Reading aloud improves fluency.
TEXT,
'video_url'=>null,
'order'=>2,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>8,
'title'=>'Listening Practice',
'content'=><<<TEXT
INTRODUCTION

Listening helps you understand spoken English.

EXPLANATION

Listen carefully.

Focus on pronunciation.

Repeat after the speaker.

Practice every day.

EXAMPLES

Listen to simple English conversations.

Repeat each sentence.

PRACTICE

Listen to a five-minute English audio and repeat it.

SUMMARY

Listening regularly improves understanding.
TEXT,
'video_url'=>null,
'order'=>3,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>8,
'title'=>'Writing Practice',
'content'=><<<TEXT
INTRODUCTION

Writing helps improve grammar and vocabulary.

EXPLANATION

Write simple sentences.

Use correct punctuation.

Check your spelling.

EXAMPLES

I love learning English.

Today is a beautiful day.

I want to improve my communication.

PRACTICE

Write ten sentences about your daily routine.

SUMMARY

Write in English every day.
TEXT,
'video_url'=>null,
'order'=>4,
'created_at'=>now(),
'updated_at'=>now(),
],

[
'course_id'=>8,
'title'=>'Revision Test',
'content'=><<<TEXT
INTRODUCTION

Revision helps you remember what you have learned.

EXPLANATION

Review previous lessons.

Practice vocabulary.

Revise grammar.

Speak confidently.

EXAMPLES

Review greetings.

Review tenses.

Review vocabulary.

PRACTICE

Complete a self-test covering all previous lessons.

SUMMARY

Regular revision leads to better English skills.
TEXT,
'video_url'=>null,
'order'=>5,
'created_at'=>now(),
'updated_at'=>now(),
],

];



 $lessons = array_merge($lessons, $basicEnglish);
 $lessons = array_merge($lessons, $dailyConversation);
 $lessons = array_merge($lessons, $grammarBasics);
 $lessons = array_merge($lessons, $englishTenses);
 $lessons = array_merge($lessons, $vocabularyBuilder);
 $lessons = array_merge($lessons, $idiomsPhrases);
 $lessons = array_merge($lessons, $businessEnglish);
 $lessons = array_merge($lessons, $englishPractice);

      //  Lesson::insert($lessons);

      foreach ($lessons as $lesson) {

    Lesson::updateOrCreate(

        [

            'course_id'=>$lesson['course_id'],

            'title'=>$lesson['title']

        ],

        $lesson

    );

}
       
    }
}