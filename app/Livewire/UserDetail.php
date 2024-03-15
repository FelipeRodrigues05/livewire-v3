<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;

    public function mount() {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
