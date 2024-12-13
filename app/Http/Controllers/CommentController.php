<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;
use App\Mail\CommentNotification;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {

        return view('comments.create', ['post' => $post]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|max:255',
            'post_id' => 'required|exists:posts,id',
        ]);

        $player = auth()->user()->player;

        $comment = new Comment;
        $comment->comment = $validatedData['comment'];
        $comment->post_id = $validatedData['post_id'];
        $comment->player_id = $player->id;
        $comment->save();

        $post = Post::with('player.user')->findOrFail($validatedData['post_id']);
        $postOwner = $post->player->user;
    
        // Send email
        if ($postOwner && $postOwner->email) {
            Mail::to($postOwner->email)->send(new CommentNotification($post, $comment));
        }

        session()->flash('message', 'Comment added.');
        return redirect()->route('posts.show', $validatedData['post_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);
        $user = auth()->user();

        if ($user->id === $comment->player->user_id || $user->role === 'coach' || $user->role === 'manager') {
            return view('comments.edit', compact('comment'));
        } else {
            return redirect()->route('posts.show', $comment->post_id)
                             ->with('error', 'You do not have permission to edit this comment.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'comment' => 'required|max:255',
        ]);

    $comment = Comment::findOrFail($id);
    $user = auth()->user();

    if ($user->id === $comment->player->user_id || $user->role === 'coach' || $user->role === 'manager') {

        $comment->comment = $validatedData['comment'];
        $comment->save();

        session()->flash('message', 'Comment updated successfully.');

        return redirect()->route('posts.show', $comment->post_id);

    } else {

        return redirect()->route('posts.show', $comment->post_id)
                         ->with('error', 'You do not have permission to edit this comment.');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);
        $user = auth()->user();

        if ($user->id === $comment->player->user_id || $user->role === 'manager') {

            $comment->delete();
    
            session()->flash('message', 'Comment deleted.');
    
        } else {

            session()->flash('error', 'You do not have permission to delete this comment.');
        }

        return redirect()->route('posts.show', $comment->post_id)->with('message', 'Comment was deleted.');
    }
}
