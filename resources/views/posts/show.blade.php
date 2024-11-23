@extends('layouts.app')

@section('title', 'Player Details')

@section('content')
    <ul>
        <li>Name: {{ $post->name }}</li>
        <li>Age: {{ $post->age }}</li>
        <li>Club Id: {{ $post->club->name }}</li>
    </ul>
    
    <form method="POST"
        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('posts.index') }}">Back</a></p>

@endsection