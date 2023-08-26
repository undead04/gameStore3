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
        $viewData['title'] = 'Game names | Details';
        $viewData['game'] = Game::find($id);
        $viewData['type'] = Type_Game::find($viewData['game']->getGenre());

        return view('clients.gamesDetail')->with('viewData', $viewData);
    }
}
