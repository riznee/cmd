									
<nav aria-label="Page Pagination">
	<ul class="pagination">
		@if ($items->onFirstPage())
			<li class="page-item"><a class="pagination-previous" href="#">Previous</a></li>
		@else
			<li class="page-item"><a class="pagination-previous"  href="{{ $items->previousPageUrl() }}" rel="prev">Previous</a></li>	
        @endif
        
        @for($i=$j; $i <=  ($lastPage); $i++)
            <li class="page-item"><a class="pagination-link" href="{{ $items->url($i)}}">{{$i}}</a></li>									
		@endfor

		@if ($items->hasMorePages())
			<li class="page-item"><a class="page-link" href="{{ $items->nextPageUrl() }}" rel="next">Next</a></li>
		@else
			<a class="pagination-next" disabled>Next page</a>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		@endif

    </ul>
</nav>
							