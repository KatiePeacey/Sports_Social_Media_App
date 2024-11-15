@extends('layouts.app')

@section('title', 'Clubs')

@section('content')
    <p>The clubs in hockey:</p>
    <ul>
        @foreach ($clubs as $club)
            <li><a href="{{ route('clubs.show', ['id' => $club->id]) }}">{{ $club->name }}</a></li>
        @endforeach
    </ul>
@endsection