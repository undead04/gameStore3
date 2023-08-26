<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Type_Game;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class GameController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Game Page - Store Game';
        $viewData['games'] = Game::all();

        return view('admin.game.games')->with('viewData', $viewData);
    }
    public function create()
    {
        $viewData = [];
        $viewData['typeGame'] = Type_Game::all();
        return view('admin.game.create')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        error_log('vo ddaay');
        $request->validate([

            'name' => 'required|max:255|unique:games,name_game',
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'developer' => 'required|min:5',
            'publisher' => 'required|min:5',
            'genre' => 'required',
            'image' => 'image'

        ]);


        $newGame = new Game();
        $newGame->setNameGame($request->input('name'));
        $newGame->setDescription($request->input('description'));
        $newGame->setPrice($request->input('price'));
        $newGame->setGenre($request->input('genre'));
        $newGame->setPublisher($request->input('publisher'));
        $newGame->setImage('');
        $newGame->setDeveloper($request->input('developer'));
        $newGame->save();

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newGame->setImage($imageName);
            $newGame->save();
        }



        return redirect()->route('admin.game.games');
    }
    public function delete($id)
    {
        Game::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];

        $viewData['title'] = 'Admin Edit Pages';
        $viewData['game'] = Game::findOrFail($id);
        return view('admin.game.edit')->with('viewData', $viewData);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'developer' => 'required|min:5',
            'publisher' => 'required|min:5',
            'genre' => 'required',
            'image' => 'image'

        ]);

        $oldGame = Game::find($id);
        $oldGame->SetNameGame($request->input('name'));
        $oldGame->setDescription($request->input('description'));
        $oldGame->setPrice($request->input('price'));
        $oldGame->setGenre($request->input('genre'));
        $oldGame->setPublisher($request->input('publisher'));
        $oldGame->setDeveloper($request->input('developer'));
        $oldGame->setImage('');

        if ($request->hasFile('image')) {
            $imageName = $oldGame->getGameId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $oldGame->setImage($oldGame->getGameId() . '.' . $request->file('image'));
        }
        dd($imageName);
        $oldGame->save();
        return redirect()->route('admin.game.games');
    }
}
