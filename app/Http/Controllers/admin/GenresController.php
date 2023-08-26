<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type_Game;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    //
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Game Page - Genres';

        return view('admin.game.genres')->with('viewData', $viewData);
    }

    public function addGenres(Request $request)
    {
        $request->validate([
            'typeName' => 'required|max:100',
        ]);
        // $viewData['typeNames'] = 
        $newType = new Type_Game();
        $newType->setTypeGame($request->input('typeName'));
        $newType->save();

        return redirect()->route('admin.game.genres');
    }
}
