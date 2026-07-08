<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Lessons\BasicEnglishSeeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BasicEnglishSeeder::class,
        ]);
    }
}