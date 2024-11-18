@extends('layouts.app')

@section('title', 'Players')

@section('content')
    <p>The players in hockey:</p>
    <ul>
        @foreach ($players as $player)
            <li><a href="{{ route('players.show', $player) }}">{{ $player->name }}</a></li>
        @endforeach
    </ul>

    {{ $players->links() }}
    <a href="{{ route('players.create' )}}">Create Player</a>

@endsection