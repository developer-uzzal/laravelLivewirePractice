<?php

namespace App\Livewire;

use App\Models\Books;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BooksEdit extends Component
{
    public $bookId;
    
    #[Validate('required|string|max:80|min:4')]
    public $title;

    #[Validate('string|required|max:80|min:4')]
    public $author;
    #[Validate('required|string|max:80|min:4')]
    public $description;
    #[Validate('required|string|max:500|min:4')]
    public $image;

    public function update( $bookId)
    {
        $this->validate();
        $book = Books::find($bookId);
        $book->update([
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description,
            'image' => $this->image
        ]);

        return $this->redirect('/books', navigate: true);
        
    }

    public function mount($bookId)
    {
        $book = Books::find($bookId);
        $this->title = $book->title;
        $this->author = $book->author;
        $this->description = $book->description;
        $this->image = $book->image;
    }

    public function render()
    {
        return view('livewire.books-edit');
    }
}
