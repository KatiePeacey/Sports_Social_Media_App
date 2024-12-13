@extends('layouts.app')


@section('content')
  <div class="px-4 py-3">
    <h1 class="text-2xl font-semibold text-gray-900">Club Details</h1>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">Club Name</dt>
        <dd class="text-base text-gray-700 sm:mt-0">{{ $club->name }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">League Level</dt>
        <dd class="text-base text-gray-700 sm:mt-0">{{ $club->league }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">Number Of Games Played</dt>
        <dd class="text-base text-gray-700 sm:mt-0">{{ $club->games_played }}</dd>
      </div>
    </dl>
  </div>
  @if(auth()->user()->role === 'manager')
<div class="flex space-x-4 px-4 py-3">
<div class='rounded-md bg-yellow-700 px-3 py-2 text-lg font-medium text-white hover:bg-yellow-600'>
  <a href="{{ route('clubs.edit', $club->id) }}">Edit Club</a>
</div>
</div> 
@endif 
  <form method="POST" action="{{ route('clubs.destroy', ['id' => $club->id]) }}">
            @csrf
            @method('DELETE')
            <div class="flex space-x-4 px-4 py-3">
              <div class='rounded-md bg-red-800 px-3 py-2 text-sm font-medium text-white hover:bg-red-600'>
                <button type="submit" >Delete</button>
              </div>
              <div class="mt-1">
              <a href="{{ route('clubs.index') }}" class="text-sm font-semibold text-gray-900">Back</a>
              </div>
            </div>
        </form>
        
</div>
@endsection