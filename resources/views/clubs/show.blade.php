@extends('layouts.app')


@section('content')
    <ul>
        <li>Name: {{ $club->name }}</li>
        <li>League: {{ $club->league }}</li>
        <li>Games Played: {{ $club->games_played }}</li>
        <li>Pitch Id: {{ $club->pitch->city }}</li>
    </ul>
@endsection