<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_num');
            $table->string('resiver_num');
            $table->text('message');
            $table->integer('institute_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('messages', function (Blueprint $table){
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
        Schema::dropIfExists('messages');
    }
}
