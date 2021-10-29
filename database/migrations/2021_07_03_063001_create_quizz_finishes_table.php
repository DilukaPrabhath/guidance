<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzFinishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizz_finishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quiz_mark_id')->unsigned();
            $table->integer('quiz_id')->unsigned();
            $table->integer('answ_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('quizz_finishes', function (Blueprint $table){
            $table->foreign('quiz_mark_id')->references('id')->on('quizz_marks')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('quiz_id')->references('id')->on('quizz_questions')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('answ_id')->references('id')->on('quizz_answers')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizz_finishes');
    }
}
