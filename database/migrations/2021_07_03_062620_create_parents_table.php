<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stu_id')->unsigned();
            $table->string('full_name');
            $table->string('nwi');
            $table->text('address');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('nic')->unique();
            $table->string('password');
            $table->tinyInteger('status');
            $table->timestamps();
        });
        Schema::table('parents', function (Blueprint $table){
            $table->foreign('stu_id')->references('id')->on('students')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
