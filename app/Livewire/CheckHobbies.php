<?php

namespace App\Livewire;

use Livewire\Component;

class CheckHobbies extends Component
{

    public array $hobbies = [];

    private array $allHobbies = ['playing', 'coding', 'listening']; // forced values

    public bool $selectAll = false;

    public bool $bulkModerate = true;
    
    public function updatedSelectAll($value) {

        if($value) {
            $this->hobbies = $this->allHobbies;
        } else {
            $this->hobbies = [];
        }
    }

    public function render()
    {
        $this->bulkModerate = !(count($this->hobbies) < 1);
        return view('livewire.check-hobbies');
    }
}
