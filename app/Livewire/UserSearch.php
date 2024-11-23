<?php

namespace App\Livewire;

use Livewire\Component;

class UserSearch extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.user-search', [
            'transactions' => Transaction::search($this->search)->paginate(10),
    ]);
    }
}