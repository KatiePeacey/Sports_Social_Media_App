@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <ul>
        <li>Name: {{ $post->name }}</li>
        <li>Content: <img src="{{ asset('images/' . $post->content) }}" alt="Post Image" width="400" height="300"></li>
        <li>Player Id: {{ $post->player->name }}</li>
    </ul>

    <form method="POST"
        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('posts.index') }}">Back</a></p>

@endsection