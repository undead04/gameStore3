<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Game;
use App\Models\GameOrder;
use App\Models\Image;
use App\Models\Type_Game;
use App\Models\TypeGame;
use Illuminate\Http\RedirectResponse;
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
        $viewData['developer'] = Developer::all();
        return view('admin.game.create')->with('viewData', $viewData);
    }
    public function store(Request $request): RedirectResponse
    {

        $request->validate([

            'name' => 'required|max:255|unique:games,name_game',
            "description" => "required",
            "price" => "required|numeric|gt:0",
            'developer' => 'required',
            'publisher' => 'required|min:5',
            'genre' => 'required',
            'image' => 'image'


        ]);
        $genres = $request->input('genre');
        $newGame = new Game();
        $newGame->setNameGame($request->input('name'));
        $newGame->setDescription($request->input('description'));
        $newGame->setPrice($request->input('price'));
        $newGame->setGenre(implode(',', $genres));
        $newGame->setPublisher($request->input('publisher'));
        $newGame->setImage('');
        $newGame->setDeveloperId($request->input('developer'));
        $newGame->save();

        if ($request->hasFile('image')) {
            $imageName = uniqid() . "."  . $request->file('image')->extension();

            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newGame->setImage($imageName);
            $newGame->save();
        }
        foreach ($genres as $genre) {
            $newTypeGame =  new TypeGame;
            $newTypeGame->setGameId($newGame->getGameId());
            $newTypeGame->setTypeId($genre);
            $newTypeGame->save();
        }
        return redirect()->route('admin.game.games');
    }
    public function delete($id)
    {
        GameOrder::where('gameid', $id)->delete();
        TypeGame::where('gameId', $id)->delete();

        Game::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];

        $viewData['title'] = 'Admin Edit Pages';
        $viewData['game'] = Game::findOrFail($id);
        $viewData['typeGame'] = Type_Game::all();
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
        $genres = $request->input('genre');

        $oldGame = Game::find($id);
        $oldGame->SetNameGame($request->input('name'));
        $oldGame->setDescription($request->input('description'));
        $oldGame->setPrice($request->input('price'));
        $oldGame->setGenre(implode(',', $genres));
        $oldGame->setPublisher($request->input('publisher'));
        $oldGame->setDeveloper($request->input('developer'));
        $oldGame->setImage('');

        if ($request->hasFile('image')) {
            $imageName = $oldGame->getGameId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $oldGame->setImage($imageName);
            $oldGame->save();
        }
        foreach ($genres as $genre) {
            $newTypeGame =  new TypeGame;
            $newTypeGame->setGameId($oldGame->getGameId());
            $newTypeGame->setTypeId($genre);
            $newTypeGame->save();
        }



        return redirect()->route('admin.game.games');
    }
}
