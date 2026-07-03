<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->string('thumbnail')->nullable();

            $table->string('short_description',255);

            $table->text('description');

            $table->enum('level',[
                'Beginner',
                'Intermediate',
                'Advanced'
            ])->default('Beginner');

            $table->string('category');

            $table->unsignedInteger('lessons_count')->default(0);

            $table->string('duration');

            $table->decimal('rating',2,1)->default(5.0);

            $table->unsignedInteger('students_count')->default(0);

            $table->unsignedInteger('xp_reward')->default(100);

            $table->string('theme_color')->default('#4F46E5');

            $table->boolean('is_premium')->default(false);

            $table->boolean('is_active')->default(true);

            $table->unsignedInteger('display_order')->default(1);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};