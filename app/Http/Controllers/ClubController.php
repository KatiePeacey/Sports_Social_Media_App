<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Pitch;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view ('clubs.index', ['clubs' => $clubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pitches = Pitch::all();

        if (Auth::user()->role === 'player') {
            return redirect()->route('clubs.index')->with('message', 'You cannot create a club.');
        } 
        if (Auth::user()->role === 'coach') {
            return redirect()->route('clubs.index')->with('message', 'You cannot create a club.');
        } 
        elseif (Auth::user()->role === 'manager') {

        } 
        else {
            return response()->json(['error' => 'Unauthorized role'], 403);
        }

        return view('clubs.create', ['pitches' => $pitches]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request['name']);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'league' => 'required|in:Premier 1,Premier 2,Division 1,Division 2,Division 3,Division 4,Division 5',
            'games_played' => 'required|integer',
            'pitch_id' => 'required|integer',
        ]);

        $a = new Club;
        $a->name = $validatedData['name'];
        $a->league = $validatedData['league'];
        $a->games_played = $validatedData['games_played'];
        $a->pitch_id = $validatedData['pitch_id'];
        $a->save();

        session()->flash('message', 'New club created.');
        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.show', ['club' => $club]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.edit', compact('club'));
        
    } 
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'league' => 'required|in:Premier 1,Premier 2,Division 1,Division 2,Division 3,Division 4,Division 5',
            'games_played' => 'required|integer',
        ]);

        $club = Club::findOrFail($id);
        $club->update($validatedData);
    
        session()->flash('message', 'Club updated successfully.');
        return redirect()->route('clubs.show', $club->id);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $club = Club::findOrFail($id);

        if (Auth::user()->role === 'player') {
            return redirect()->route('clubs.index')->with('message', 'You cannot delete any clubs.');
        } 
        if (Auth::user()->role === 'coach') {
            return redirect()->route('clubs.index')->with('message', 'You cannot delete any clubs.');
        } 
        elseif (Auth::user()->role === 'manager') {

        } 
        else {
            return response()->json(['error' => 'Unauthorized role'], 403);
        }

        $club->delete();

        return redirect()->route('clubs.index')->with('message', 'Club was deleted.');
    }
}
