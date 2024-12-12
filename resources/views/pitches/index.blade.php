@extends('layouts.app')

@section('title', 'Pitches')

@section('content')
    
    <div class="px-4 py-3">
    <h1 class="text-2xl font-semibold text-gray-900">The Pitches</h1>
  </div>
    <div class="grid grid-cols-5 gap-4 p-4">
        @foreach ($pitches as $pitch)
            <a href="{{ route('pitches.show', ['id' => $pitch->id]) }}" class="rounded-md outline outline-offset-2 outline-green-800 px-3 py-2 text-sm font-medium text-black hover:bg-green-800 hover:text-white">{{ $pitch->city }}</a>
        @endforeach
        </div>
@endsection
