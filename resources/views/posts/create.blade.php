@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>Name: <input type="text" name="name"
            value="{{ old('name') }}"></p>
        <p>Age: <input type="text" name="age"
            value="{{ old('age') }}"></p>

        <p>Club Id: <select name="club_id">
            @foreach ($clubs as $club)
                <option value="{{ $club->id }}"
                    @if ($club->id == old('club_id'))
                        selected="selected"
                    @endif

                >{{ $club->name }}</option>
                </option>
            @endforeach
        </select>
        </p>

        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>

@endsection