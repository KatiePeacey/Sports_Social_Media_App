@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p>The posts in hockey:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->player->name }}</a></li>
            <li>Content: <img src="{{ asset('images/' . $post->content) }}" alt="Post Image" width="400" height="300"></li>
        @endforeach
    </ul>

    {{ $posts->links() }}
    <a href="{{ route('posts.create' )}}">Create PosT</a>

@endsection