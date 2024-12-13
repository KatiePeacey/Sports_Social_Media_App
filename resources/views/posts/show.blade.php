@extends('layouts.app')

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
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4">
    <dt class="text-base font-medium text-blue-800">Comments</dt>
    <div class="sm:col-span-2">
        @if ($post->comments->isNotEmpty())
            <ul class="list-disc pl-5">
                @foreach ($post->comments as $comment)
                  <div class="comment">
                    <strong class="text-gray-700">{{ $comment->player->name }}</strong>: 
                    <span class="text-gray-700">{{ $comment->comment }}</span>

                    @if(auth()->check() && (auth()->user()->id === $comment->player->user_id || auth()->user()->role === 'manager'))
                      <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-red-600">Delete</button>
                      </form>
                    @if(auth()->check() && (auth()->user()->id === $comment->player->user_id || auth()->user()->role === 'coach' || auth()->user()->role === 'manager'))
                      <a href="{{ route('comments.edit', $comment->id) }}" class="text-indigo-700">Edit</a>
                    @endif
                  @endif
                @endforeach
              </div>
            </ul>
        @else
            <p class="text-gray-500">No comments yet.</p>
        @endif
    </div>
</div>

        
</div>

<div class="flex space-x-4 px-4 py-3">
<div class='rounded-md bg-green-800 px-3 py-2 text-lg font-medium text-white hover:bg-green-500'>
    <a href="{{ route('comments.create', $post->id) }}">Add a comment</a>
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
