@extends('layouts.app')

@section('title', 'Umpires')

@section('content')
    <p>The umpires in hockey:</p>
    <ul>
        @foreach ($umpires as $umpire)
            <li><a href="{{ route('umpires.show', ['id' => $umpire->id]) }}">{{ $umpire->name }}</a></li>
        @endforeach
    </ul>

@endsection