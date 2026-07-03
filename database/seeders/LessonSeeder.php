<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::insert([
            [
                'course_id' => 1,
                'title' => 'Basic Greetings',
                'content' => 'Hello, Hi, Good Morning',
                'video_url' => 'https://youtube.com/example1',
                'order' => 1,
            ],
            [
                'course_id' => 1,
                'title' => 'Introducing Yourself',
                'content' => 'My name is...',
                'video_url' => 'https://youtube.com/example2',
                'order' => 2,
            ],
            [
                'course_id' => 2,
                'title' => 'Daily Conversation',
                'content' => 'How are you? I am fine.',
                'video_url' => 'https://youtube.com/example3',
                'order' => 1,
            ],
            [
                'course_id' => 2,
                'title' => 'Asking Questions',
                'content' => 'What, Where, When',
                'video_url' => 'https://youtube.com/example4',
                'order' => 2,
            ],
            [
                'course_id' => 3,
                'title' => 'Grammar Basics',
                'content' => 'Noun, Verb, Tense',
                'video_url' => 'https://youtube.com/example5',
                'order' => 1,
            ],
            [
                'course_id' => 3,
                'title' => 'Sentence Formation',
                'content' => 'I am going to school',
                'video_url' => 'https://youtube.com/example6',
                'order' => 2,
            ],
        ]);
    }
}