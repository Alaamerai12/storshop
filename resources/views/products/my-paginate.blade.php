

@if ($paginator->hasPages())
    <div class="link1" >
  
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled link1-item" aria-disabled="true" >
                    <span aria-hidden="true">&lt;</span>
                </li>
            @else
               
                <li  class="link1-item"><a  class="a-link"href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>
                
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled link1-item" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active link1-item" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li  class="link1-item"><a class="a-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="link1-item">
                    <a class="a-link" href="{{ $paginator->nextPageUrl() }}" rel="next" >&gt;</a>
                </li>
            @else
                <li class="disabled link1-item" aria-disabled="true" >
                    <span aria-hidden="true">&gt;</span>
                </li>
            
                
            @endif
            </ul>
</div>
@endif
