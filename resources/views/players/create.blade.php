@extends('layouts.app')

@section('title', 'Create Player')

@section('content')
    <form method="POST" action="{{ route('players.store') }}">
        @csrf
        <p>Name: <input type="text" name="name"
            value="{{ old('name') }}"></p>
        <p>Age: <input type="text" name="age"
            value="{{ old('age') }}"></p>
        <p>Club Id: <input type="text" name="club_id"
            value="{{ old('club_id') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('players.index') }}">Cancel</a>
    </form>

@endsection