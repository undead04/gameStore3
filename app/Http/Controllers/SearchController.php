<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    function getSearchAjax(Request $request)
    {
        $viewData = [];
        $key = $request->all();

        $viewData['searchGame'] = Game::where('name_Game', 'like', '%' . $key['key'] . '%')->get();

        return view('layouts.search')->with('viewData', $viewData);
    }
}
