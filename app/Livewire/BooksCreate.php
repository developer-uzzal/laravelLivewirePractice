<?php

namespace App\Livewire;

use App\Models\Books;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BooksCreate extends Component
{
    #[Validate('required|string|max:80|min:4')]
    public $title;

    #[Validate('string|required|max:80|min:4')]
    public $author;
    #[Validate('required|string|max:80|min:4')]
    public $description;
    #[Validate('required|string|max:500|min:4')]
    public $image;

    public function submit()
    {
        // avabeo hobe 

        // $this->validate([
        //     'title' => 'required',
        //     'author' => 'required',
        //     'description' => 'required',
        //     'image' => 'required',
        // ]);

        $this->validate();

        Books::create([
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description,
            'image' => $this->image
        ]);

        $this->reset();
    }
    public function render()
    {
        return view('livewire.books-create');
    }
}
