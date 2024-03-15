<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;

    public string $name = '';

    public string $lastName = '';

    public function mount() {

        $this->fill([
            'name' => "Felipe",
            "lastName" => "Rodrigues"
        ]);
    }

    public function refresh() {
        $this->reset('name', 'lastName');
    }

    #[Computed]
    public function fullName() {
        return "$this->name $this->lastName";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
