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
        @foreach ($i =0; $i < $paginator->count(); $i++)
          <?php 
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $e)
                      	<?php
                           #Current page
                           $count = 0;
                           $currentClass = "";
                           $p = $paginator->currentPage();
                           if($page == $p) $currentClass = "page-item active";
                          else $currentClass = "page-item";
                         ?>
                   <li class="{{$currentClass}}"><span>{{ $p }}</span></li>
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