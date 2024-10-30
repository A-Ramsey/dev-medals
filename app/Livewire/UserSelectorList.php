<?php

namespace App\Livewire;

use App\Models\Medal;
use App\Models\User;
use Livewire\Component;

class UserSelectorList extends Component
{
    public Medal $medal;

    public function render()
    {
        return view('livewire.user-selector-list', [
            "allUsers" => User::all(),
        ]);
    }
}
