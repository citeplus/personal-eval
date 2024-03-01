<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = 'eat';
    public $todos = [
        'Trash',
        'Dishes',
    ];

    public function add()
    {
        array_push($this->todos, $this->todo);
        //$this->todo = '';
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
