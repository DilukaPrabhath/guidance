<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_num')->unique();
            $table->integer('subject_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->tinyInteger('grade');
            $table->string('class_name');
            $table->string('class_number')->unique();
            $table->date('class_date');
            $table->time('class_time');
            $table->double('insti_presentage');
            $table->integer('institute_id')->unsigned();
            $table->double('admition_fee');
            $table->double('class_fee');
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('teacher_classes', function (Blueprint $table){
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_classes');
    }
}
