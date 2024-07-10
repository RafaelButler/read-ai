{{--
Paginator without url pagination
--}}
<nav aria-label="Page navigation">
    <ul class="pagination flex items-center gap-1 justify-end">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <x-secondary-button class="page-link opacity-35">&laquo;</x-secondary-button>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" wire:click="previousPage" rel="prev" wire:navigate>
                    <x-secondary-button>
                        &laquo;
                    </x-secondary-button>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <x-button class="page-link">{{ $page }}</x-button>
                        </li>
                    @else
                        <li class="page-item"><a class="page-link" wire:click="gotoPage({{ $page }})" wire:navigate>
                                <x-secondary-button>{{ $page }}</x-secondary-button>
                            </a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" wire:click="nextPage" rel="next" wire:navigate>
                    <x-secondary-button>
                        &raquo;
                    </x-secondary-button>
                </a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <x-secondary-button class="page-link opacity-35">&raquo;</x-secondary-button>
            </li>
        @endif
    </ul>
</nav>
