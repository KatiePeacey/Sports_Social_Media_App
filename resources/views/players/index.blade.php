@extends('layouts.app')

@section('title', 'Player')

@section('content')
    <p>The players in hockey:</p>
    <ul>
        @foreach ($players as $player)
            <li><a href="{{ route('players.show', ['id' => $player->id]) }}">{{ $player->name }}</a></li>
        @endforeach
    </ul>
@endsection