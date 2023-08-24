<?php

use Illuminate\Support\Facades\Route;

use function Termwind\render;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'clients.home');

Route::view('/admin', 'admin.home');

Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.home')->name('admin.home');
    Route::view('/games', 'admin.game.games')->name('admin.game.games');
    Route::view('/editgames/1', 'admin.game.gamesDetail');
});
