
<ul role="list" class="divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4 sm:pl-6">
        @foreach ($players as $player)
        <div class="bg-gray-800 text-white rounded-lg p-6 w-auto max-w-lg">
            <p class="text-lg font-semibold">Name: {{ $player->name }}</p>
            <p class="mt-1 text-sm">Email: {{ $player->email }}</p>
            <p class="mt-1 text-sm">Date of Birth: {{ $player->date_of_birth }}</p>
            <p class="mt-1 text-sm">Phone Number: {{ $player->phone_number }}</p>
            <p class="mt-1 text-sm">Postcode: {{ $player->postcode }}</p>
        </div>
        @endforeach
    </div>
  </li>
</ul>
