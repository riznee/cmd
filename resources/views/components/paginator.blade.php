<?php
    if($pages->lastPage() >= 1 && $pages->currentPage() <=2 ){
        $j=1;
		$page = $pages->lastPage();
    } else {
        $j=$pages->currentPage()-5 ;
		$page = currentPage()+5;
    }
?>
											
<nav aria-label="Page Pagination">
	<ul class="pagination">
		@if ($pages->onFirstPage())
			<li class="page-item"><a class="pagination-previous" href="#">Previous</a></li>
		@else
			<li class="page-item"><a class="pagination-previous"  href="{{ $pages->previousPageUrl() }}" rel="prev">Previous</a></li>	
        @endif
        
        @for($i=$j; $i <=  ($page); $i++)
            <li class="page-item"><a class="pagination-link" href="{{ $pages->url($i)}}">{{$i}}</a></li>									
		@endfor

		@if ($pages->hasMorePages())
			<li class="page-item"><a class="page-link" href="{{ $pages->nextPageUrl() }}" rel="next">Next</a></li>
		@else
			<a class="pagination-next" disabled>Next page</a>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		@endif

        </ul>
</nav>
							