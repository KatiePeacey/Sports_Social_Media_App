<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::simplepaginate(20);
        return view ('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$clubs = Club::all();
        $players = Player::orderBy('name', 'asc')->get();
        return view('players.create', ['players' => $players]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request['name']);
        $validatedData = $request->validate([
            'content' => 'required|string',
            'player_id' => 'required|integer',
        ]);
        $a = new Post;
        $a->content = $validatedData['content'];
        $a->player_id = $validatedData['player_id'];
        $a->save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        //$player = Player::findOrFail($id);
        return view('posts.show', ['post' => $post]);
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
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Post was deleted.');
    }
}
