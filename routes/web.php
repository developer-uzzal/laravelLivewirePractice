<?php

use App\Livewire\BooksCreate;
use App\Livewire\BooksEdit;
use App\Livewire\BooksList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', BooksList::class)->name('books.index')->lazy();
Route::get('/books/create', BooksCreate::class)->name('books.create');
Route::get('/book/{bookId}', BooksEdit::class)->name('book.edit');