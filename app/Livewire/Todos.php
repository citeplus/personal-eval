<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    public function add()
    {
        array_push($this->todos, $this->todo);
        //$this->todo = '';
        $this->reset('todo');
    }

    public function mount()
    {
        $this->todos = ['Trash','Dishes',];
        $this->todo = 'Type...';
    }

    //this is called at every update of a wire-model value
    //can be more easy for only $todo with updatedTodo
    #public function updated($property, $value)

    public function updatedTodo($value)
    {
        #$this->$property = strtoupper($value);
        $this->todo = strtoupper($value);

        //this is usable for validating like $this->validate()
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
