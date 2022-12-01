<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_user', function (Blueprint $table) {
            $table->id();
            $table->integer('count');
            $table->text('text');
            // Ship Films
            $table->unsignedBigInteger('film_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            // Ship Genres
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_user');
    }
};
