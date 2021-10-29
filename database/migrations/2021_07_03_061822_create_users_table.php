<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nwi');
            $table->string('mobile')->unique();
            $table->string('tele');
            $table->string('nic')->unique();
            $table->string('email')->unique();
            $table->string('address',255);
            $table->string('image');
            $table->integer('user_type_id')->unsigned();
            $table->string('user_number');
            $table->tinyInteger('status');
            $table->integer('ins_id')->unsigned();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_name')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table){
            $table->foreign('user_type_id')->references('id')->on('user_types')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('ins_id')->references('id')->on('institutes')->onDelete('Restrict')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
