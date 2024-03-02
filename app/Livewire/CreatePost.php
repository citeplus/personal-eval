<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'Renseignez le titre')]
    #[Rule('min:4', message: 'Trop court....')]
    public $title = '';

    #[Rule('required')]
    public $content = '';


    public function save()
    {
        // $this->validate([
        //     'title' => 'required',
        //     'content' => 'required'
        // ]);

        $this->validate();

        Post::create([
            'title'  => $this->title,
            'content' => $this->content
        ]);

        return redirect('show-posts');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
