<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Type_Game;
use App\Models\TypeGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Type;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home page | Web game store';
        $viewData['paner'] = Game::query()->orderBy('price', 'desc')->take(3)->get();
        $viewData['games'] = Game::all();
        $viewData['gameAllowType'] = Type_Game::all();
        return view('clients.home')->with('viewData', $viewData);
    }
}
