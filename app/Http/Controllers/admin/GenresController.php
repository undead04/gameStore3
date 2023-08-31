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
        $viewData['genres'] = Type_Game::all();
        return view('admin.genre.genres')->with('viewData', $viewData);
    }

    public function create()
    {
        return view('admin.genre.create');
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

        return redirect()->route('admin.genre.genres');
    }
    public function edit($id)
    {
        $viewData = [];

        $viewData['title'] = 'Admin Edit Type Page';
        $viewData['genre'] = Type_Game::findOrFail($id);
        return view('admin.genre.edit')->with('viewData', $viewData);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'typeName' => 'required|max:255'
        ]);

        $oldGame = Type_Game::find($id);
        $oldGame->setTypeGame($request->input('typeName'));
        $oldGame->save();
        return redirect()->route('admin.genre.genres');
    }

    public function delete($id)
    {
        Type_Game::destroy($id);
        return back();
    }
}
