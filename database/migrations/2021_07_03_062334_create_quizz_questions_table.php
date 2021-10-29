<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizz_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paper_id')->unsigned();
            $table->text('question');
            $table->string('ques_img')->nullable();
            $table->string('ques_audio')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('quizz_questions', function (Blueprint $table){
            $table->foreign('paper_id')->references('id')->on('quizz_papers')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizz_questions');
    }
}
