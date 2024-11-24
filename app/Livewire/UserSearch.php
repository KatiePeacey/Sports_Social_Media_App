<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class UserSearch extends Component
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.user-search', [
            'posts' => Post::where('name', $this->search)->get(),
        ]);
    }
}
