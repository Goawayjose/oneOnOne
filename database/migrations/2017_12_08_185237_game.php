<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Game extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {
        $table->increments('id');
        $table->string('player1')->nullable();
        $table->string('player2')->nullable();
        $table->string('player1score')->nullable();
        $table->string('player2score')->nullable();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
