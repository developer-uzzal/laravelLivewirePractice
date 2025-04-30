<?php

namespace App\Livewire;

use App\Models\Books;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

class BooksList extends Component
{
    use WithPagination;

    function deleteBook($id)
    {
        $book = Books::find($id);
        $book->delete();
    }


    public $search = '';

    #[Lazy]
    public function render()
    {
        
        if ($this->search) {
            $books = Books::where('title', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $books = Books::orderBy('id', 'desc')->paginate(8);
        }
    
        return view('livewire.books-list', compact('books'));
    }
}
