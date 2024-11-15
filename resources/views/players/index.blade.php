@extends('layouts.app')

@section('title', 'Players')

@section('content')
    <p>The players in hockey:</p>
    <ul>
        @foreach ($players as $player)
            <li>{{ $player->name }}</li>
        @endforeach
    </ul>
@endsection