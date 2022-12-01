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
        Schema::create('user_film', function (Blueprint $table) {
            $table->id();
            // Таблица понравившиеся фильмы
            // Ship Film
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
        Schema::dropIfExists('user_film');
    }
};
