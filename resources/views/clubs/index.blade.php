@extends('layouts.app')

@section('title', 'Clubs')

@section('content')
    <p>The clubs in hockey:</p>
    <ul>
        @foreach ($clubs as $club)
            <li>{{ $club->name }}</li>
        @endforeach
    </ul>
@endsection