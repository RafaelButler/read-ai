@props(['paginator'])

@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination flex items-center gap-1 justify-end">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <x-secondary-button class="page-link opacity-35" aria-hidden="true">&laquo;</x-secondary-button>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" wire:navigate>
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
                            <li class="page-item"><a class="page-link" href="{{ $url }}" wire:navigate>
                                    <x-secondary-button>{{ $page }}</x-secondary-button>
                                </a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" wire:navigate>
                        <x-secondary-button>
                            &raquo;
                        </x-secondary-button>
                    </a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <x-secondary-button class="page-link opacity-35" aria-hidden="true">&raquo;</x-secondary-button>
                </li>
            @endif
        </ul>
    </nav>
@endif

