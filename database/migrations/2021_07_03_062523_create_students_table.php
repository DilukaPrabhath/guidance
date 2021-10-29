<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nwi');
            $table->string('nic')->unique();
            $table->string('student_num')->unique();
            $table->date('dob');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('stu_img');
            $table->string('mobile')->unique();
            $table->string('tele')->nullable();
            $table->string('user_name')->unique();
            $table->string('password');
            $table->integer('institute_id')->unsigned();
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('students', function (Blueprint $table){
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
        Schema::dropIfExists('students');
    }
}
