<?php

namespace App\Livewire;

use App\Models\Medal;
use App\Models\User;
use Livewire\Component;

class UserSelector extends Component
{
    public User $user;
    public Medal $medal;
    public $checked;

    public function mount()
    {
        if ($this->user->medals->contains($this->medal)) {
            $this->checked = true;
        }
    }

    public function save()
    {
        $this->medal->users()->toggle($this->user);
        $this->medal->save();
    }

    public function render()
    {
        return view('livewire.user-selector');
    }
}
