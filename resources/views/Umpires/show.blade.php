@extends('layouts.app')

@section('title', 'Umpire Details')

@section('content')
    <ul>
        <li>Name: {{ $umpire->name }}</li>
        <li>Email: {{ $umpire->email }}</li>
        <li>Postcode: {{ $umpire->postcode }}</li>
        <li>Qualification Level: {{ $umpire->qualification_level }}</li>
    </ul>
@endsection