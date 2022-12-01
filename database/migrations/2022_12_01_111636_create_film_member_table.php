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
        Schema::create('film_member', function (Blueprint $table) {
            $table->id();
            // Ship Films
            $table->unsignedBigInteger('film_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            // Ship Genres
            $table->unsignedBigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_member');
    }
};
