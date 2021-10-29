<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuRegisterClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_register_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stu_id')->unsigned();
            $table->integer('te_class_id')->unsigned();
            $table->double('admition');
            $table->timestamps();
        });
        Schema::table('stu_register_classes', function (Blueprint $table){
            $table->foreign('stu_id')->references('id')->on('students')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('te_class_id')->references('id')->on('teacher_classes')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stu_register_classes');
    }
}
