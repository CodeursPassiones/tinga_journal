@if ($paginator->hasPages())
    <nav class="sj-pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="sj-prevpage disabled"><a href="#"><i class="fa fa-angle-left"></i> Précédent</a></li>
            @else
                <li class="sj-prevpage"><a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i>
                        Précédent</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="sj-active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="sj-nextpage"><a href="{{ $paginator->nextPageUrl() }}">Suivant <i
                            class="fa fa-angle-right"></i></a></li>
            @else
                <li class="sj-nextpage disabled"><a href="#">Suivant <i class="fa fa-angle-right"></i></a></li>
            @endif
        </ul>
    </nav>
@endif
