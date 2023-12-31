<?php

use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GameController;
use App\Http\Controllers\client\GameController as ClientGameController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\admin\GenresController;

use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ProfitController;
use App\Http\Controllers\client\FilterController;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\client\ShoppingController;
use App\Http\Controllers\client\MyAcountController;
use App\Http\Controllers\SearchController;
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

Route::get('search', [SearchController::class, 'getSearchAjax'])->name('search');

Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('clients.home');
    Route::view('distribution', 'clients.distribution')->name('clients.distribution');
});
Auth::routes();
Route::get('home', function () {
    if (Auth::user() && Auth::user()->getRole() == 'admin') {
        return redirect()->route('admin.home');
    } else {
        return redirect('/');
    }
});


Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
        Route::get('/users', [AdminHomeController::class, 'user'])->name('admin.user');
        Route::get('/games', [GameController::class, 'index'])->name('admin.game.games');
        Route::post('/games/store', [GameController::class, 'store'])->name('admin.game.store');
        Route::delete('/games/delete/{id}', [GameController::class, 'delete'])->name('admin.game.delete');
        Route::get('games/edit/{id}', [GameController::class, 'edit'])->name('admin.game.edit');
        Route::put('games/update/{id}', [GameController::class, 'update'])->name('admin.game.update');
        Route::get('games/create', [GameController::class, 'create'])->name('admin.game.create');
        Route::get('genres', [GenresController::class, 'index'])->name('admin.genre.genres');
        Route::post('genres/store', [GenresController::class, 'addGenres'])->name('admin.genres.store');
        Route::get('genres/create', [GenresController::class, 'create'])->name('admin.genre.create');
        Route::get('genres/edit/{id}', [GenresController::class, 'edit'])->name('admin.genre.edit');
        Route::put('genres/update/{id}', [GenresController::class, 'update'])->name('admin.genre.update');
        Route::delete('/genres/delete/{id}', [GenresController::class, 'delete'])->name('admin.genre.delete');
        Route::get('/profit', [ProfitController::class, 'index'])->name('admin.profit.index');
    });
});

Route::prefix('games')->group(function () {
    Route::get('/', [ClientGameController::class, 'allGames'])->name('clients.games');
    Route::post('/', [FilterController::class, 'filter'])->name('clients.games.filter');
    Route::get('/{id}', [ClientGameController::class, 'detail'])->name('clients.gamesDetail');
    Route::get('viewMore/{type}', [ClientGameController::class, 'viewMore'])->name('clients.viewMore');
});
Route::middleware('auth')->group(function () {
    Route::prefix('cart')->group(function () {
        Route::get('', [ShoppingController::class, 'index'])->name('cart.index');
        Route::post('add/{id}', [ShoppingController::class, 'add'])->name('cart.add'); //
        Route::get('delete/{id}', [ShoppingController::class, 'delete'])->name('cart.delete'); //delete cart
        Route::get('purchase', [ShoppingController::class, 'purchase'])->name('cart.purchase');
        Route::post('purchaseNow/{id}', [ShoppingController::class, 'purchaseNow'])->name('cart.purchaseNow'); //mua ngay
        Route::get('myAcount', [MyAcountController::class, 'orders'])->name('cart.orders');
    });
});
