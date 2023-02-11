<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $search= $this->search.'%';
        return view('livewire.search-users', [
            'users' => User::where('name','like',$search)->get(),
        ]);
    }
}
