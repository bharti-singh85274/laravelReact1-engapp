<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Questions\BasicEnglishQuestionSeeder;
use Database\Seeders\Questions\DailyConversationQuestionSeeder;
use Database\Seeders\Questions\EnglishTensesQuestionSeeder;
use Database\Seeders\Questions\VocabularyBuilderQuestionSeeder;
use Database\Seeders\Questions\IdiomsPhrasesQuestionSeeder;
use Database\Seeders\Questions\EnglishPracticeQuestionSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,
            BasicEnglishQuestionSeeder::class,
             DailyConversationQuestionSeeder::class,
              GrammarBasicsQuestionSeeder::class,
              EnglishTensesQuestionSeeder::class,
              VocabularyBuilderQuestionSeeder::class,
               IdiomsAndPhrasesQuestionSeeder::class,
               BusinessEnglishQuestionSeeder::class,
                 EnglishPracticeQuestionSeeder::class,
           
        ]);
    }
}