 @if ($paginator->hasPages())
<nav aria-label="Clients">
  <ul class="pagination">
  	<?php
          #Previous Page Link
          $prevClass = "";
          if($paginator->onFirstPage()) $prevClass = "page-item disabled";
          else $prevClass = "page-item";
     ?>
    <li class="{{$prevClass}}">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
      {{-- Pagination Elements --}}
        @foreach ($paginator as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span>{{ $page }}</span></li>
                    @else
                        <li><a class="page-link"  href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
      	<?php
          #Previous Page Link
          $nextClass = "";
          if($paginator->hasMorePages()) $nextClass = "page-item disabled";
          else $nextClass = "page-item";
     ?>
    <li class="{{$nextClass}}">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
@endif