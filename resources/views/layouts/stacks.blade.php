
<div class="grid grid-cols-5 gap-4 p-4">
  @foreach ($clubs as $club)
    <div class="bg-gray-800 text-white rounded-lg p-4">
      <a href="{{ route('clubs.show', ['id' => $club->id]) }}">{{ $club->name }}</a>
    </div>
  @endforeach
</div>
