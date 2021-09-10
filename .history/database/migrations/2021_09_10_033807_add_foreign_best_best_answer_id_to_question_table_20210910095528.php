<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignBestBestAnswerIdToQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('best_answer_id')
                    ->references('id')
                    ->on('answers')
                    ->onDelete('SET NULL');
                      // Change to UnsignedInteger
            $table->unsignedInteger('best_answer_id')->change();
            
            // Updating relationships
            $table->foreign('best_answer_id')->references('id')->on('answers')->onDelete('SET NULL')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['best_answer_id']);
        });
    }
}
