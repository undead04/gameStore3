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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name_Game');
            $table->string('developer');
            $table->string('publisher');
            $table->string('image');

            $table->string('price');
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('type_game'); // Khóa ngoại

            $table->foreign('type_game')->references('id')->on('typegames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
