<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Player;
use App\Models\Club;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::simplepaginate(20);
        return view ('players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$clubs = Club::all();
        $clubs = Club::orderBy('name', 'asc')->get();
        return view('players.create', ['clubs' => $clubs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request['name']);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'club_id' => 'required|integer',
        ]);
        $a = new Player;
        $a->name = $validatedData['name'];
        $a->age = $validatedData['age'];
        $a->club_id = $validatedData['club_id'];
        $a->save();

        session()->flash('message', 'Player was created.');
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::findOrFail($id);
        return view('players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
