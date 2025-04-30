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

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <p>Loading...</p>
        </div>
        HTML;
    }

  
    public function render()
    {
        sleep(3);
        
        if ($this->search) {
            $books = Books::where('title', 'like', '%' . $this->search . '%')->paginate(4);
        } else {
            $books = Books::orderBy('id', 'desc')->paginate(4);
        }
    
        return view('livewire.books-list', compact('books'))
        ->title('Books List')
        ->layoutData([
            'metaTitle' => 'Books List | My Website',
            'metaDescription' => 'Browse a curated collection of books with detailed descriptions.',
        ]);
    }
}
