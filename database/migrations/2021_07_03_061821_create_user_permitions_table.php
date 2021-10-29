<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usertype_id')->unsigned();
            $table->integer('route_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('user_permitions', function (Blueprint $table){
            $table->foreign('usertype_id')->references('id')->on('user_types')->onDelete('Restrict')->onUpdate('Cascade');
            $table->foreign('route_id')->references('id')->on('routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_permitions');
    }
}
