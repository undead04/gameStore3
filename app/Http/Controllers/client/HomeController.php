<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Type_Game;
use App\Models\TypeGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Type;

use function PHPSTORM_META\type;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home page | Web game store';
        $viewData['paner'] = Game::query()->orderBy('price', 'desc')->take(6)->get();

        $viewData['bestSaler'] = Game::join('gameorders', 'games.id', '=', 'gameorders.gameId')
            ->select(
                'games.id',
                'games.price',
                'games.image',
                'games.name_Game',
                'games.description',
                DB::raw('sum(gameorders.quantity) as totalQuantity')
            )
            ->groupBy(
                'games.id',
                'games.price',
                'games.image',
                'games.name_Game',
                'games.description',
            )
            ->orderBy('totalQuantity', 'desc')
            ->take(10)->get();
        $viewData['gameAction'] = Game::join('type_games', 'games.id', '=', 'type_games.gameId')
            ->join('types', 'type_games.typeId', '=', 'types.id')
            ->where('types.typeNames', 'Action')
            ->take(3)->get();

        $viewData['gameAd-si-ro'] = Type_Game::where('typeNames', 'Adventure')
            ->orWhere('typeNames', 'Role-playing')
            ->orWhere('typeNames', 'Simulation')->get();

        return view('clients.home')->with('viewData', $viewData);
    }
}
