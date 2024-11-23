@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>Content: <input type="text" name="content"
            value="{{ old('content') }}"></p>

        <p>Player Id: <select name="player_id">
            @foreach ($players as $player)
                <option value="{{ $player->id }}"
                    @if ($player->id == old('player_id'))
                        selected="selected"
                    @endif

                >{{ $player->name }}</option>
                </option>
            @endforeach
        </select>
        </p>

        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>

@endsection