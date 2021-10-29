<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('institute_id')->unsigned();
            $table->string('tech_img')->nullable();
            $table->string('title',100);
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('class_ads', function (Blueprint $table){
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
        Schema::dropIfExists('class_ads');
    }
}
