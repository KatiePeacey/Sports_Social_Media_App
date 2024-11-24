@extends('layouts.app')

@section('title', 'Player Details')

@section('content')
    <ul>
        <li>Name: {{ $player->name }}</li>
        <li>Date of Birth: {{ $player->date_of_birth }}</li>
        <li>Email: {{ $player->email }}</li>
        <li>Phone Number: {{ $player->phone_number }}</li>
        <li>Postcode: {{ $player->postcode }}</li>
    </ul>
@endsection