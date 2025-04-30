<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <input type="text" wire:model.live.debounce.500ms="search" placeholder="Search" class="form-control">
            </div>


            <div wire:loading wire:target="search, nextPage, previousPage , gotoPage, page">
                {{-- Placeholder during loading --}}
                <div class="row ">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-img-top bg-secondary placeholder" style="height: 250px;"></div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                </p>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-10"></span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary disabled placeholder col-5"></button>
                                    <button class="btn btn-danger disabled placeholder col-5"></button>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>

        {{-- Book cards --}}
        <div class="row" wire:loading.remove>
            @forelse ($books as $book)
            <div wire:key="book-{{ $book->id }}" class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Name: {{ $book->title }}</h5>
                        <p class="card-text">Author: {{ $book->author }}</p>
                        <p class="card-text">Description: {{ $book->description }}</p>
                        <div class="mt-auto d-flex justify-content-between">
                            <a wire:navigate class="btn btn-primary" href="{{ route('book.edit', $book->id) }}">Edit</a>
                            <button class="btn btn-danger" wire:click="deleteBook({{ $book->id }})">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">No books found.</div>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="col-12 mt-4 d-flex justify-content-center">
            {{ $books->links('paginate.paginateTemplate') }}
        </div>
    </div>
</div>
</div>