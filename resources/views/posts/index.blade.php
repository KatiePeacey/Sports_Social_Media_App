@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p>The players in hockey:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a></li>
        @endforeach
    </ul>

    {{ $posts->links() }}
    <a href="{{ route('posts.create' )}}">Create Player</a>

@endsection