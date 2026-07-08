<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [

            [
                'title' => 'Basic English',
                'slug' => 'basic-english',
                'thumbnail' => 'courses/basic_english.png',
                'short_description' => 'Build your English foundation.',
                'description' => 'Learn greetings, introductions, everyday vocabulary, sentence formation, and basic conversations for daily life.',
                'level' => 'Beginner',
                'category' => 'Speaking',
                'lessons_count' => 30,
                'duration' => '6 Hours',
                'rating' => 4.9,
                'students_count' => 12540,
                'xp_reward' => 250,
                'theme_color' => '#4CAF50',
                'display_order' => 1,
            ],

            [
                'title' => 'Daily Conversation',
                'slug' => 'daily-conversation',
                'thumbnail' => 'courses/daily_conversation.png',
                'short_description' => 'Speak confidently in daily situations.',
                'description' => 'Practice conversations used at home, office, shopping malls, restaurants, travel, and public places.',
                'level' => 'Beginner',
                'category' => 'Speaking',
                'lessons_count' => 24,
                'duration' => '5 Hours',
                'rating' => 4.8,
                'students_count' => 10452,
                'xp_reward' => 220,
                'theme_color' => '#3B82F6',
                'display_order' => 2,
            ],

            [
                'title' => 'Grammar Basics',
                'slug' => 'grammar-basics',
                'thumbnail' => 'courses/grammar.png',
                'short_description' => 'Master English grammar.',
                'description' => 'Learn nouns, pronouns, verbs, adjectives, articles, prepositions and sentence structures with examples.',
                'level' => 'Beginner',
                'category' => 'Grammar',
                'lessons_count' => 28,
                'duration' => '7 Hours',
                'rating' => 4.9,
                'students_count' => 15870,
                'xp_reward' => 300,
                'theme_color' => '#8B5CF6',
                'display_order' => 3,
            ],

            [
                'title' => 'English Tenses',
                'slug' => 'english-tenses',
                'thumbnail' => 'courses/tenses.png',
                'short_description' => 'Master all 12 English tenses.',
                'description' => 'Learn Present, Past, Future, Perfect and Continuous tenses with examples and exercises.',
                'level' => 'Intermediate',
                'category' => 'Grammar',
                'lessons_count' => 35,
                'duration' => '8 Hours',
                'rating' => 5.0,
                'students_count' => 18200,
                'xp_reward' => 350,
                'theme_color' => '#F59E0B',
                'display_order' => 4,
            ],

            [
                'title' => 'Vocabulary Builder',
                'slug' => 'vocabulary-builder',
                'thumbnail' => 'courses/vocabulary.png',
                'short_description' => 'Expand your English vocabulary.',
                'description' => 'Learn thousands of useful English words with meanings, pronunciation and examples.',
                'level' => 'Intermediate',
                'category' => 'Vocabulary',
                'lessons_count' => 40,
                'duration' => '10 Hours',
                'rating' => 4.9,
                'students_count' => 16540,
                'xp_reward' => 400,
                'theme_color' => '#EF4444',
                'display_order' => 5,
            ],

            [
                'title' => 'Idioms & Phrases',
                'slug' => 'idioms-phrases',
                'thumbnail' => 'courses/idioms.png',
                'short_description' => 'Speak like a native speaker.',
                'description' => 'Master common idioms and phrases used in real-life English conversations.',
                'level' => 'Advanced',
                'category' => 'Speaking',
                'lessons_count' => 32,
                'duration' => '9 Hours',
                'rating' => 4.8,
                'students_count' => 9420,
                'xp_reward' => 450,
                'theme_color' => '#EC4899',
                'display_order' => 6,
            ],

            [
                'title' => 'Business English',
                'slug' => 'business-english',
                'thumbnail' => 'courses/business.png',
                'short_description' => 'Professional English for work.',
                'description' => 'Learn office communication, meetings, emails, interviews and workplace vocabulary.',
                'level' => 'Intermediate',
                'category' => 'Business',
                'lessons_count' => 30,
                'duration' => '9 Hours',
                'rating' => 4.9,
                'students_count' => 8420,
                'xp_reward' => 500,
                'theme_color' => '#009688',
                'display_order' => 7,
            ],

           [
            'title' => 'English Practice',
            'slug' => 'english-practice',
            'thumbnail' => 'courses/practice.png',
            'short_description' => 'Practice what you have learned.',
            'description' => 'Strengthen your English through exercises, quizzes and revision lessons.',
            'level' => 'Beginner',
            'category' => 'Practice',
            'lessons_count' => 30,
            'duration' => '6 Hours',
            'rating' => 4.9,
            'students_count' => 10000,
            'xp_reward' => 300,
            'theme_color' => '#795548',
            'is_premium' => false,
            'is_active' => true,
            'display_order' => 8,
        ],


        ];

        // foreach ($courses as $course) {
        //     Course::create($course);
        // }

        foreach ($courses as $course) {

    Course::updateOrCreate(

        [
            'slug' => $course['slug'],
        ],

        $course

    );

}

    }
}