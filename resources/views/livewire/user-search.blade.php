<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->name }}</li>
        @endforeach
    </ul>
</div>
