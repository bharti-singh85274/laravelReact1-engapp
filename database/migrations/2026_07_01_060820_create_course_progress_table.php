<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_progress', function (Blueprint $table) {

            $table->id();

            // User who is learning
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            // Course being tracked
            $table->foreignId('course_id')
                ->constrained()
                ->onDelete('cascade');

            // Progress tracking
            $table->unsignedInteger('completed_lessons')->default(0);

            $table->unsignedInteger('total_lessons')->default(0);

            // Percentage (0–100)
            $table->unsignedTinyInteger('progress_percentage')->default(0);

            // Status of course
            $table->enum('status', [
                'not_started',
                'in_progress',
                'completed'
            ])->default('not_started');

            // Last opened lesson/course
            $table->unsignedBigInteger('last_lesson_id')->nullable();

            // Time tracking (optional but powerful later)
            $table->unsignedInteger('time_spent_seconds')->default(0);

            // Completion tracking
            $table->timestamp('started_at')->nullable();

            $table->timestamp('completed_at')->nullable();

            $table->timestamp('last_opened_at')->nullable();

            $table->timestamps();

            // Prevent duplicate progress per user per course
            $table->unique(['user_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_progress');
    }
};