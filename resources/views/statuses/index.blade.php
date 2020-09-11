@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.admiNav')
		</head>
		<br>
		<div class="columns">
			<div class="column is-two-fifths">
				@include('partials.status')	
			</div>
			<div class="column">
				<h6 class="subtitle is-5">Status Log</h6>
				<table class="table is-striped is-bordered is-narrow is-fullwidth is-responsive">
						<thead>
							<tr>
								<th>Log id</th>
								<th>Service Name</th>
								<th>Statuse Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(is_null($statuses))
							<tr>									
								<td> --- NO DATA ---</td>
							</tr>
							@endif
							@foreach($statuses as $status)
							<tr>
								<td>{{$status->id}}</td>
								<td>{{$status->allservice['name']}}</td>
								<td>{{$status->statuse_date}}</td>
								<td>{{$status->status}}</td>
								<td>
									<div class='columns'>
										<div class='column'>
											<a class="button  is-link" href="">View logs</a> 
										</div>
										<div class='column'>
											<a class="button  is-primary" href="">Create Post</a>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
									
						</tbody>
					</table>
					@if ($statuses->hasPages())
					<nav class="pagination is-centered is-small">
						@if ($statuses->onFirstPage())
							<a class="pagination-previous" disabled>Previous</a>
						@else
							<a href="{{ $statuses->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
						@endif
						@if ($statuses->hasMorePages())
							<a class="pagination-next" href="{{ $statuses->nextPageUrl() }}" rel="next">Next</a>
						@else
							<a class="pagination-next" disabled>Next page</a>
						@endif
						
						<ul class="pagination-list" role="navigation" aria-label="pagination">
								@if($statuses->lastPage() >= 10 && $statuses->currentPage() <=6 )
									<?php $j=1 ?>
								@else
									<?php $j=$statuses->currentPage()-5 ?>
								@endif
								@for($i=$j; $i <=  ($statuses->currentPage()+10); $i++)
									<li>
									<a class="pagination-link" href="{{ $statuses->url($i)}}" aria-label="Goto page 1">{{$i}}</a>
									</li>
								@endfor
								.....
								<a class="pagination-link" href="{{ $statuses->url($statuses->lastPage())}}" aria-label="Goto page Last Page">{{$statuses->lastPage()}}</a>
									</li>
						</ul>
	
					</nav>
					@endif


			</div>
		</div>	  
		@include('partials.footer')
	</div>
</div>
@stop