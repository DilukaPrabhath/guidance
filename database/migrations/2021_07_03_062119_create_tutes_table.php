<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tute_name');
            $table->string('tute_num')->unique();
            $table->integer('subject_id')->unsigned();
            $table->integer('te_class_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('institute_id')->unsigned();
            $table->string('note')->nullable();
            $table->string('tut_img');
            $table->date('tute_give_date');
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('tutes', function (Blueprint $table){
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('te_class_id')->references('id')->on('teacher_classes')->onDelete('Restrict')->onUpdate('Cascade');
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
        Schema::dropIfExists('tutes');
    }
}
