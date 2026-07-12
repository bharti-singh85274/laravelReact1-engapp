<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Lesson;

class GrammarBasicsQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $lesson1 = Lesson::where('course_id',3)
            ->where('title','What is Grammar?')
            ->first();

        $lesson2 = Lesson::where('course_id',3)
            ->where('title','Parts of Speech')
            ->first();

        $lesson3 = Lesson::where('course_id',3)
            ->where('title','Nouns')
            ->first();

        $lesson4 = Lesson::where('course_id',3)
            ->where('title','Pronouns')
            ->first();

        $lesson5 = Lesson::where('course_id',3)
            ->where('title','Verbs')
            ->first();

     $questions = [

    
          /*
|--------------------------------------------------------------------------
| Lesson 1 : What is Grammar?
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson1->id,
    'question' => 'What is grammar?',
    'options' => [
        'Rules of a language',
        'A story book',
        'A game',
        'A dictionary'
    ],
    'correct_answer' => 'Rules of a language',
    'explanation' => 'Grammar is the set of rules that helps us speak and write a language correctly.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson1->id,
    'question' => 'Grammar helps us to?',
    'options' => [
        'Speak and write correctly',
        'Play cricket',
        'Draw pictures',
        'Cook food'
    ],
    'correct_answer' => 'Speak and write correctly',
    'explanation' => 'Grammar improves both spoken and written communication by helping us form correct sentences.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson1->id,
    'question' => 'Grammar tells us how to?',
    'options' => [
        'Arrange words into meaningful sentences',
        'Play games',
        'Draw maps',
        'Cook food'
    ],
    'correct_answer' => 'Arrange words into meaningful sentences',
    'explanation' => 'Grammar provides rules for arranging words so that sentences have the correct meaning.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson1->id,
    'question' => 'Correct grammar makes communication?',
    'options' => [
        'Easy',
        'Difficult',
        'Impossible',
        'Slow'
    ],
    'correct_answer' => 'Easy',
    'explanation' => 'Using correct grammar makes ideas easier for others to understand.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson1->id,
    'question' => 'Which sentence is correct?',
    'options' => [
        'She is happy.',
        'She happy.',
        'Happy she.',
        'Is happy she.'
    ],
    'correct_answer' => 'She is happy.',
    'explanation' => 'A complete sentence needs a subject and a verb. "She is happy." is grammatically correct.',
    'created_at' => now(),
    'updated_at' => now(),
],



             /*
|--------------------------------------------------------------------------
| Lesson 2 : Parts of Speech
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson2->id,
    'question' => 'How many parts of speech are there?',
    'options' => [
        'Eight',
        'Five',
        'Six',
        'Ten'
    ],
    'correct_answer' => 'Eight',
    'explanation' => 'Traditional English grammar has eight parts of speech: noun, pronoun, verb, adjective, adverb, preposition, conjunction, and interjection.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which of these is a noun?',
    'options' => [
        'Teacher',
        'Quickly',
        'Beautiful',
        'And'
    ],
    'correct_answer' => 'Teacher',
    'explanation' => 'A noun is the name of a person, place, animal, or thing. "Teacher" is the name of a person.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which of these is a pronoun?',
    'options' => [
        'She',
        'Book',
        'School',
        'Run'
    ],
    'correct_answer' => 'She',
    'explanation' => 'A pronoun replaces a noun. "She" is a pronoun used in place of a female person\'s name.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which of these is an adjective?',
    'options' => [
        'Beautiful',
        'Teacher',
        'Run',
        'Slowly'
    ],
    'correct_answer' => 'Beautiful',
    'explanation' => 'An adjective describes or gives more information about a noun or pronoun. "Beautiful" describes something.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson2->id,
    'question' => 'Which sentence contains a verb?',
    'options' => [
        'Rahul plays cricket.',
        'Beautiful flower.',
        'Red apple.',
        'Happy child.'
    ],
    'correct_answer' => 'Rahul plays cricket.',
    'explanation' => 'A verb shows an action or state. In this sentence, "plays" is the verb.',
    'created_at' => now(),
    'updated_at' => now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 3 : Nouns
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson3->id,
    'question' => 'What is a noun?',
    'options' => [
        'A name of a person, place, animal or thing',
        'An action word',
        'A describing word',
        'A joining word'
    ],
    'correct_answer' => 'A name of a person, place, animal or thing',
    'explanation' => 'A noun is a naming word. It names a person, place, animal, thing, or idea.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Which of these is a noun?',
    'options' => [
        'School',
        'Quickly',
        'Beautiful',
        'Run'
    ],
    'correct_answer' => 'School',
    'explanation' => 'A school is the name of a place, so it is a noun.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Which sentence contains a noun?',
    'options' => [
        'Rahul is reading a book.',
        'Run quickly.',
        'Very beautiful.',
        'Slowly walked.'
    ],
    'correct_answer' => 'Rahul is reading a book.',
    'explanation' => 'The sentence contains the nouns "Rahul" (person) and "book" (thing).',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Dog is the name of?',
    'options' => [
        'An animal',
        'A place',
        'An action',
        'A color'
    ],
    'correct_answer' => 'An animal',
    'explanation' => 'A dog is an animal, and the word "dog" is a noun because it names an animal.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson3->id,
    'question' => 'Book is an example of?',
    'options' => [
        'Thing',
        'Verb',
        'Pronoun',
        'Adverb'
    ],
    'correct_answer' => 'Thing',
    'explanation' => 'A book is an object or thing, so it is a noun.',
    'created_at' => now(),
    'updated_at' => now(),
],



/*
|--------------------------------------------------------------------------
| Lesson 4 : Pronouns
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson4->id,
    'question' => 'What is a pronoun?',
    'options' => [
        'A word that replaces a noun',
        'A naming word',
        'An action word',
        'A describing word'
    ],
    'correct_answer' => 'A word that replaces a noun',
    'explanation' => 'A pronoun is used in place of a noun to avoid repeating the same noun again and again.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Which is a pronoun?',
    'options' => [
        'He',
        'School',
        'Beautiful',
        'Run'
    ],
    'correct_answer' => 'He',
    'explanation' => 'The word "He" is a pronoun because it replaces the name of a male person.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Choose the correct pronoun: Rahul is a student. ___ studies English.',
    'options' => [
        'He',
        'It',
        'They',
        'We'
    ],
    'correct_answer' => 'He',
    'explanation' => 'Since Rahul is a male person, the correct pronoun is "He". The sentence becomes "Rahul is a student. He studies English."',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Which of these is NOT a pronoun?',
    'options' => [
        'Book',
        'They',
        'We',
        'She'
    ],
    'correct_answer' => 'Book',
    'explanation' => 'A book is a thing, so "Book" is a noun, not a pronoun.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson4->id,
    'question' => 'Pronouns help us avoid?',
    'options' => [
        'Repeating nouns',
        'Writing',
        'Reading',
        'Listening'
    ],
    'correct_answer' => 'Repeating nouns',
    'explanation' => 'Pronouns make sentences shorter and smoother by replacing repeated nouns.',
    'created_at' => now(),
    'updated_at' => now(),
],



          /*
|--------------------------------------------------------------------------
| Lesson 5 : Verbs
|--------------------------------------------------------------------------
*/

[
    'lesson_id' => $lesson5->id,
    'question' => 'What is a verb?',
    'options' => [
        'A word that shows action or state',
        'A naming word',
        'A joining word',
        'A describing word'
    ],
    'correct_answer' => 'A word that shows action or state',
    'explanation' => 'A verb is a word that expresses an action (run, eat, write) or a state of being (is, am, are).',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Which of these is a verb?',
    'options' => [
        'Run',
        'School',
        'Beautiful',
        'Chair'
    ],
    'correct_answer' => 'Run',
    'explanation' => 'The word "Run" describes an action, so it is a verb.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Identify the verb: She writes well.',
    'options' => [
        'Writes',
        'She',
        'Well',
        'The'
    ],
    'correct_answer' => 'Writes',
    'explanation' => 'The word "writes" shows the action performed by the subject "She", making it the verb.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Every sentence usually contains a?',
    'options' => [
        'Verb',
        'Color',
        'Number',
        'Punctuation mark'
    ],
    'correct_answer' => 'Verb',
    'explanation' => 'A complete sentence normally requires a verb to express an action or a state.',
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'lesson_id' => $lesson5->id,
    'question' => 'Which sentence contains a verb?',
    'options' => [
        'They play football.',
        'Blue sky.',
        'Beautiful flower.',
        'Red apple.'
    ],
    'correct_answer' => 'They play football.',
    'explanation' => 'The word "play" is the verb because it shows the action performed by "They".',
    'created_at' => now(),
    'updated_at' => now(),
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