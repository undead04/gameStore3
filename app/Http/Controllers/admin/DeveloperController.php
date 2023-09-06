<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Type_Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeveloperController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Game Page - Store Game';
        $viewData['developer'] = Developer::all();

        return view('admin.developer.index')->with('viewData', $viewData);
    }
    public function create()
    {
        $viewData = [];
        $viewData['typeGame'] = Type_Game::all();
        return view('admin.developer.create')->with('viewData', $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'image' => 'required|image',
        ]);
        $newDeveloper = new Developer();
        $newDeveloper->setDeveloperName($request->input('name'));
        $newDeveloper->setDeveloperImage('');
        $newDeveloper->save();
        if ($request->hasFile('image')) {
            $imageName  = uniqid() . "."  . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newDeveloper->setDeveloperImage($imageName);
            $newDeveloper->save();
        }
        return redirect()->route('admin.developer.index');
    }
    public function delete($id)
    {
        Game::where('developerId', $id)->delete();
        Developer::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];

        $viewData['title'] = 'Admin Edit Pages';
        $viewData['developer'] = Developer::findOrFail($id);

        return view('admin.developer.update')->with('viewData', $viewData);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|required'

        ]);
        $oldDeveloper = Developer::find($id);
        $oldDeveloper->setDeveloperName($request->input('name'));

        $oldDeveloper->setDeveloperImage('');

        if ($request->hasFile('image')) {
            $imageName  = uniqid() . "."  . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $oldDeveloper->setdeveloperImage($imageName);
            $oldDeveloper->save();
        }
        return redirect()->route('admin.developer.index');
    }
}
