<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('te_class_id')->unsigned();
            $table->integer('institute_id')->unsigned();
            $table->integer('exams_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('exam_visits', function (Blueprint $table){
            $table->foreign('te_class_id')->references('id')->on('teacher_classes')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('exams_id')->references('id')->on('exams')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_visits');
    }
}
