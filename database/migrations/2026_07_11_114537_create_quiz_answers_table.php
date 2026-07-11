<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('quiz_answers', function (Blueprint $table) {

            $table->id();

            $table->foreignId('quiz_result_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('question_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('selected_answer')
                ->nullable();

            $table->string('correct_answer');

            $table->boolean('is_correct');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('quiz_answers');
    }
}