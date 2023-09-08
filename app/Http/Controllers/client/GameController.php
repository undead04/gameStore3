<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Type_Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function detail($id)
    {
        $viewData = [];
        $viewData['game'] = Game::find($id);

        $viewData['title'] = $viewData['game']->getNameGame() . ' | Details';
        $viewData['type'] = Type_Game::find($viewData['game']->getGenre());

        return view('clients.gamesDetail')->with('viewData', $viewData);
    }

    public function allGames()
    {
        $viewData = [];
        $viewData['title'] = 'Game Store 3' . ' | All games';
        $viewData['games'] = Game::all();
        $viewData['type'] = Type_Game::all();
        return view('clients.games')->with('viewData', $viewData);
    }
}
