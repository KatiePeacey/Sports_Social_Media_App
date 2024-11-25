<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        @foreach($players as $player)
            <li>{{ $player->name }}</li>
        @endforeach
    </ul>
</div>
