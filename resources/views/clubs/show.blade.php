@extends('layouts.app')

@section('title', 'Club Details')

@section('content')
    <ul>
        <li>Name: {{ $club->name }}</li>
        <li>Teams: {{ $club->teams }}</li>
        <li>Established: {{ $club->established }}</li>
    </ul>
@endsection