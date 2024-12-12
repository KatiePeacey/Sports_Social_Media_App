
<div class="grid grid-cols-5 gap-4 p-4">
  @foreach ($clubs as $club)
    
    <a href="{{ route('clubs.show', ['id' => $club->id]) }}" class="{{ request()->routeIs('clubs.create*') ? : 'rounded-md outline outline-offset-2 outline-blue-800 px-3 py-2 text-sm font-medium text-black hover:bg-blue-800 hover:text-white' }}">{{ $club->name }}</a>
    
  @endforeach
</div>
