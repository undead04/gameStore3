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
        Schema::create('gameOrders', function (Blueprint $table) {
            $table->unsignedBigInteger('orderId'); // Khóa ngoại Orderid
            $table->foreign('orderId')->references('id')->on('orders');
            $table->unsignedBigInteger('gameId'); // Khóa ngoại Gameid
            $table->foreign('gameId')->references('id')->on('games');
            $table->integer('quantity')->default(1);
            $table->float('price');
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
        Schema::dropIfExists('gameOrders');
    }
};
