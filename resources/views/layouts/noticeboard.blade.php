<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Noticeboard</h2>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        @foreach ($posts as $post)
      <li>
            <h1 class="text-lg font-semibold tracking-tight text-gray-900"><a href="{{ route('posts.show', $post) }}">{{ $post->player->name }}</a></h3>
            <p class="text-sm/6 font-semibold text-indigo-600">{{ $post->created_at->diffForHumans ()}}</p>
            <p class="text-sm/6 font-semibold text-indigo-600">Content: <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" width="400" height="300"></p>
            <p class="text-sm/6 font-semibold text-gray-600">Caption: {{ $post->caption }}</p>
            <p class="text-sm/6 font-semibold text-gray-600">See comments </p>
      </li>
        @endforeach
    </ul>
  </div>
</div>
