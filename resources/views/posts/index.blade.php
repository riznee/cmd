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
					<div class="columns">
						<div class="column">	
							<h6 class="subtitle is-5">Post list</h6>
							<a class="button  is-info" href="{{route('posts.create')}}">Create Posts</a>
						</div>
						<div class="column">
						</div>
					</div>
					<table class="table  is-fullwidth is-striped is-bordered">
							<thead>
								<tr>
									<th>Title</th>
									<th> Type</th>
									<th>Created At</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($post as $row)				
									<tr>
										<td>{{$row->title}}</td>
										<td>{{$row->post_type}}</td>
										<td>{{$row->created_at}}</td>
										<td>
											<div class='columns'>
												<div class='column'>
													<a class="button  is-link" href="{{route('posts.show',$row['id'])}}">View</a> 
												</div>
												<div class='column'>
													<form  accept-charset="UTF-8" method="post" action="{{route('posts.destroy',$row['id'])}}">
													@csrf
													{{ method_field('DELETE') }}{{ method_field('DELETE') }}
													<button type="submit" class="button  is-link">Delete</button>
													</form>
												</div>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@if ($post->hasPages())
						<nav class="pagination is-centered is-small">
							@if ($post->onFirstPage())
								<a class="pagination-previous" disabled>Previous</a>
							@else
								<a href="{{ $post->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
							@endif
							@if ($post->hasMorePages())
								<a class="pagination-next" href="{{ $post->nextPageUrl() }}" rel="next">Next</a>
							@else
								<a class="pagination-next" disabled>Next page</a>
							@endif
							
							<ul class="pagination-list" role="navigation" aria-label="pagination">
									@if($post->lastPage() >= 1 && $post->currentPage() <=2 )
										<?php 
											$j=1;
											$page = $post->lastPage();
										?>
	
									@else
										<?php
										 $j=$post->currentPage()-5 ;
										 $page = currentPage()+5;
										?>
									@endif
									@for($i=$j; $i <=  ($page); $i++)
										<li>
										<a class="pagination-link" href="{{ $post->url($i)}}" aria-label="Goto page 1">{{$i}}</a>
										</li>
									@endfor
									.....
									<a class="pagination-link" href="{{ $post->url($post->lastPage())}}" aria-label="Goto page Last Page">{{$post->lastPage()}}</a>
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