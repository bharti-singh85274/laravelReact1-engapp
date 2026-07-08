<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuizFieldsToUserProgressTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('user_progress', function (Blueprint $table) {

            $table->integer('score')
                  ->default(0)
                  ->after('lesson_id');

            $table->integer('percentage')
                  ->default(0)
                  ->after('score');

            $table->integer('xp')
                  ->default(0)
                  ->after('percentage');

            $table->timestamp('completed_at')
                  ->nullable()
                  ->after('completed');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('user_progress', function (Blueprint $table) {

            $table->dropColumn([
                'score',
                'percentage',
                'xp',
                'completed_at'
            ]);

        });
    }
}