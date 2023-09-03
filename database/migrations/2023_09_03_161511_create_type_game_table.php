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
        Schema::create('type_games', function (Blueprint $table) {
            $table->unsignedBigInteger('gameId'); // Khóa ngoại GameID
            $table->foreign('gameId')->references('id')->on('games');
            $table->unsignedBigInteger('typeId'); // Khóa ngoại typeId
            $table->foreign('typeId')->references('id')->on('typegames');
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
        Schema::dropIfExists('type_games');
    }
};
