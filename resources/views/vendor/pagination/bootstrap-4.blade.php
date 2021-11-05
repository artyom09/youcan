@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
            <a class="page-numbers prev" aria-hidden="true"> <i class="bx bx-chevron-left"></i></a>

    @else

            <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="bx bx-chevron-left"></i></a>

    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))

                <span class="page-numbers">{{ $element }}</span>

        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="page-numbers current">{{ $page }}</a>

                @else
                    <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
            <a class="page-numbers next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="bx bx-chevron-right"></i></a>

    @else
        <a class="page-numbers" aria-hidden="true"><i class="bx bx-chevron-right"></i></a>

    @endif
@endif
