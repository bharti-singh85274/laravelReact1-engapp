<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_progress', function (Blueprint $table) {

    $table->integer('total_lessons')->default(0)->after('completed_lessons');

    $table->integer('progress_percentage')->default(0)->after('progress');

    $table->string('status')->default('not_started')->after('progress_percentage');

    $table->foreignId('last_lesson_id')
          ->nullable()
          ->constrained('lessons')
          ->nullOnDelete();

    $table->timestamp('started_at')->nullable();

    $table->timestamp('last_opened_at')->nullable();

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
