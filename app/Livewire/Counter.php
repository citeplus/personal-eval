<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1; //par defaut les variables membres public de la classe sont automatiquement rendues sur la vue livewire

    public function increment($by)
    {
        $this->count += $by;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
