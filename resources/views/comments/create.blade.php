@extends('layouts.app')

@section('content')
<div class="px-4 py-3">
    <h1 class="text-2xl font-semibold text-gray-900 sm:pl-2">Add a comment:</h1>
  </div>
    <form method="POST" action="{{ route('comments.store', $post->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="sm:pl-6">
 
            <div>
                    <label for="comment" class="block text-sm font-medium text-gray-900">Comment</label>
                    <input id="comment" type="text" name="comment" value="{{ old('comment') }}" class="mt-2 p-2 w-full border border-gray-300 rounded-md" required>
            </div>
            </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div>

            <div class="flex space-x-4 px-4 py-3">
                <button type="submit" class="px-4 py-2 bg-blue-800 text-white rounded-md">Submit</button>
                <div class="mt-2">
                <a href="{{ route('posts.index') }}" class="text-sm font-semibold text-gray-900">Cancel</a>
                </div>
            </div>

    </form>
@endsection
