@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    @if(isset($post))
    <div class="px-4 py-3">
    <h1 class="text-2xl font-semibold text-gray-900">Post Details</h1>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">Name</dt>
        <dd class="text-base text-gray-700 sm:mt-0">{{ $post->player->name }}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">Content</dt>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" width="400" height="300">
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 ">
        <dt class="text-base font-medium text-blue-800">Comments</dt>
        <dd class="text-base text-gray-700 sm:mt-0">{{ $post->comment->comment ?? 'No comments' }}</dd>
      </div>
        
</div>


  <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
            @csrf
            @method('DELETE')
            <div class="flex space-x-4 px-4 py-3">
              <div class='rounded-md bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-blue-600'>
                <button type="submit" >Delete</button>
              </div>
              <div class="mt-1">
              <a href="{{ route('posts.index') }}" class="text-sm font-semibold text-gray-900">Back</a>
              </div>
            </div>
        </form>
        @endif
        
</div>
@endsection
