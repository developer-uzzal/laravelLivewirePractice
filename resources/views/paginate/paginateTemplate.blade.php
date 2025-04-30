<div>
    @if ($paginator->hasPages())
        <nav aria-label="Pagination Navigation">
            <ul class="pagination justify-content-center">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="Previous">
                        <span class="page-link" aria-hidden="true">&laquo; Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="Previous">
                            &laquo; Previous
                        </button>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <button type="button" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="Next">
                            Next &raquo;
                        </button>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="Next">
                        <span class="page-link">Next &raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
