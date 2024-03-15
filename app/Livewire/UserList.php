<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    
    #[Computed]
    public function users() {
        $user =  User::query()->select([ 'name', 'email' ])->paginate();
        $this->dispatch('$refresh');
        return $user;
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
