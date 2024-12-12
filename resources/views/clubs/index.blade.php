@extends('layouts.app')


@section('content')

<div class="gap-4 p-4">
    <a href="{{ route('clubs.create') }}" class="{{ request()->routeIs('clubs.create*') ? 'rounded-md bg-blue-400 px-5 py-3 text-sm font-medium text-white hover:bg-blue-400' : 'rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600' }}">Create a new club</a>
</div>
@include('layouts.stacks')
    
@endsection