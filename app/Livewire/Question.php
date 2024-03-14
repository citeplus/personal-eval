<?php

namespace App\Livewire;

use App\Models\Question as ModelsQuestion;
use Livewire\Component;

class Question extends Component
{
    public $libelle = '';

    public function enregistreDb()
    {
        ModelsQuestion::create([
            'libelle' => $this->libelle
        ]);
    }

    public function render()
    {
        return view('livewire.question', [
            'questions' => ModelsQuestion::all()
        ]);
    }
}
