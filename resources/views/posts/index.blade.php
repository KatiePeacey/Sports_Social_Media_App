@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <!-- <ul>
        @foreach ($posts as $post) -->
            <!-- <li><a href="{{ route('posts.show', $post) }}">{{ $post->player->name }}</a></li> -->
            <!-- <li>Post: <img src="{{ asset('images/' . $post->content) }}" alt="Post Image" width="400" height="300"></li> -->
            <!-- <li>{{ $post -> content }}</li> -->

        <!-- @endforeach
    </ul> -->
    @include('layouts.noticeboard')
    @include('layouts.pagination')


@endsection