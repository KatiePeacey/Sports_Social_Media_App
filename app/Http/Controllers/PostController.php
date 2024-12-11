<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Player;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(8);
        return view ('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$clubs = Club::all();
        // $players = Player::orderBy('name', 'asc')->get();
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request['name']);
        $validatedData = $request->validate([
            'caption' => 'required|string',
            'image_path' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        if ($request->hasFile('image_path')) {
            $fileName = $request->file('image_path')->getClientOriginalName();
            $path = $request->file('image_path')->move(public_path('images'), $fileName);
            
            $player = Player::where('user_id', auth()->id())->first();

            Post::create([
                'caption' => $request->caption,
                'image_path' => $fileName, // Save the relative path
                'player_id' => $player->id,
                
            ]);

        session()->flash('message', 'Post was created.');
        return redirect()->route('posts.index');
        }
    return redirect()->back()->withErrors(['image' => 'Image upload failed.']);
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

        if (Auth::user()->role === 'player') {
            $player = Player::where('user_id', Auth::id())->first();

            if ($player && $post->player_id !== $player->id) {
                return redirect()->route('posts.index')->with('message', 'You can only delete your own posts.');
            }
        } 
        elseif (Auth::user()->role === 'coach' || Auth::user()->role === 'manager') {

        } 
        else {
            return response()->json(['error' => 'Unauthorized role'], 403);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Post was deleted.');
    }
}
