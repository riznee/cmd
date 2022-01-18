<nav class="pagination is-centered" role="navigation" aria-label="pagination">
	
		@if ($items->onFirstPage())
		<a class="pagination-previous" disabled >Previous</a>
		@else
			<a class="pagination-previous"  href="{{ $items->previousPageUrl() }}" rel="prev">Previous</a>
        @endif 

		@if ($items->hasMorePages())
			<a class="pagination-next" href="{{ $items->nextPageUrl() }}" rel="next">Next</a></li>
		@else
			<a class="pagination-next" disabled>Next page</a>
		@endif

        <ul class="pagination-list">
			@for($i=$j; $i<= ($lastPage); ++$i)
				<li>
					<a class="pagination-link" href="{{ $items->url($i)}}">{{$i}}</a>
				</li>									
			@endfor
    	</ul>
</nav>
							