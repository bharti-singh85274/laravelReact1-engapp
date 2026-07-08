<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Questions\BasicEnglishQuestionSeeder;
use Database\Seeders\Questions\DailyConversationQuestionSeeder;

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
           
        ]);
    }
}