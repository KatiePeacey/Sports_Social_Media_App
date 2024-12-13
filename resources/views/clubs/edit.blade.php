@extends('layouts.app')

@section('content')
    <div class="px-4 py-3">
        <h1 class="text-2xl font-semibold text-gray-900 sm:pl-2">Edit Club</h1>
    </div>
    <form method="POST" action="{{ route('clubs.update', $club->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="sm:pl-6">
 
            <div>
                    <label for="name" class="block text-sm font-medium text-gray-900">Club Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $club->name) }}" class="mt-2 p-2 w-full border border-gray-300 rounded-md" required>
            </div>
            <div>
                
                    <label for="league" class="block text-sm font-medium text-gray-900">League Level</label>
                    
                    <select name="league" class="mt-2 p-2 w-full border border-gray-300 rounded-md"> 
                            <option>
                                Premier 1
                            </option>
                            <option>
                                Premier 2
                            </option>
                            <option>
                                Division 1
                            </option>
                            <option>
                                Division 2
                            </option>
                            <option>
                                Division 3
                            </option>
                            <option>
                                Division 4
                            </option>
                            <option>
                                Division 5
                            </option>
                    </select>
            </div>
            <div>
                    <label for="games_played" class="block text-sm font-medium text-gray-900">Games Played</label>
                    <input id="games_played" type="text" name="games_played" value="{{ old('games_played', $club->games_played) }}" class="mt-2 p-2 w-full border border-gray-300 rounded-md" required>
            </div>

        </div>
            <div class="flex space-x-4 px-4 py-3">
                <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded-md">Update Club</button>
                <div class="mt-2">
                <a href="{{ route('clubs.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>
                </div>
            </div>

    </form>
@endsection




