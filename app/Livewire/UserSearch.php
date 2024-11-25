<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;

class UserSearch extends Component
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.user-search', [
            'players' => Player::where('name', $this->search)->get(),
        ]);
    }
}
