<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GameController;
use App\Http\Controllers\client\HomeController;
use PhpParser\Node\Expr\FuncCall;

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


Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('clients.games');
});



Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.home')->name('admin.home');
    Route::get('/games', [GameController::class, 'index'])->name('admin.game.games');
    Route::post('/games/store', [GameController::class, 'store'])->name('admin.game.store');
    Route::delete('/games/delete/{id}', [GameController::class, 'delete'])->name('admin.game.delete');
    Route::get('games/edit/{id}', [GameController::class, 'edit'])->name('admin.game.edit');
    Route::put('games/update/{id}', [GameController::class, 'update'])->name('admin.game.update');
    Route::get('games/create', [GameController::class, 'create'])->name('admin.game.create');
});

Route::prefix('games')->group(function () {
    Route::view('/', 'clients.games')->name('clients.games');
    Route::view('/1', 'clients.gamesDetail')->name('clients.gamesDetail');
});
