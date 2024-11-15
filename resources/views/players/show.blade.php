@extends('layouts.app')

@section('title', 'Player Details')

@section('content')
    <ul>
        <li>Name: {{ $player->name }}</li>
        <li>Age: {{ $player->age }}</li>
        <li>Club_id: {{ $player->club->name }}</li>
    </ul>
@endsection