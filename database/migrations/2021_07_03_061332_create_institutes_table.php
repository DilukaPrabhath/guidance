<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institute');
            $table->text('inst_num');
            $table->string('address',255);
            $table->integer('town_id')->unsigned();
            $table->text('tele')->unique();
            $table->text('email')->unique();
            $table->text('comment');
            $table->text('ins_img');
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('institutes', function (Blueprint $table){
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
