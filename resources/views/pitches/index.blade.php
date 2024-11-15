@extends('layouts.app')

@section('title', 'Pitches')

@section('content')
    <p>The pitches:</p>
    <ul>
        @foreach ($pitches as $pitch)
            <li><a href="{{ route('pitches.show', ['id' => $pitch->id]) }}">{{ $pitch->city }}</a></li>
        @endforeach
    </ul>
@endsection