<nav class="pagination is-centered" role="navigation" aria-label="pagination">
	<a class="pagination-previous">Previous</a>
	<a class="pagination-next">Next page</a>
	<ul class="pagination-list">
	  <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
	  <li><span class="pagination-ellipsis">&hellip;</span></li>
	  <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
	  <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
	  <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
	  <li><span class="pagination-ellipsis">&hellip;</span></li>
	  <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
	</ul>
</nav>




<nav class="pagination is-centered" role="navigation" aria-label="pagination">
	<ul class="pagination">
		<a class="pagination-previous">Previous</a>
		<a class="pagination-next">Next page</a>

		{{-- @if ($items->onFirstPage())
			<li class="page-item"><a class="pagination-previous" href="#">Previous</a></li>
		@else
			<li class="page-item"><a class="pagination-previous"  href="{{ $items->previousPageUrl() }}" rel="prev">Previous</a></li>	
        @endif --}}
        
        {{-- @for($i=$j; $i <=  ($lastPage); $i++)
            <li class="page-item"><a class="pagination-link" href="{{ $items->url($i)}}">{{$i}}</a></li>									
		@endfor --}}

		{{-- @if ($items->hasMorePages())
			<li class="page-item"><a class="page-link" href="{{ $items->nextPageUrl() }}" rel="next">Next</a></li>
		@else
			<a class="pagination-next" disabled>Next page</a>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		@endif --}}

    </ul>
</nav>
							