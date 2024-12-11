@extends('layouts.app')


@section('content')
    <p>The clubs:</p>
    <ul>
        @foreach ($clubs as $club)
            <li><a href="{{ route('clubs.show', ['id' => $club->id]) }}">{{ $club->name }}</a></li>
        @endforeach
    </ul>
@endsection