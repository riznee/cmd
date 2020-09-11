@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head>
			@include('partials.admiNav')
		</head>
		<section class="columns">
			<div class="column is-one-fifth">
				@include('partials.adminPanel')
			</div>
			<div class="column">
				<div class="hero is-fullheight">
					<div class="card">
						<header class="card-header">
						  <p class="card-header-title">
							Articles
						  </p>
						  <a href="{{route('articles.create')}}" class="card-header-icon" aria-label="more options">
							<span class="icon">
							  <i class="fas fa-plus" aria-hidden="true"></i>
							</span>
						  </a>
						</header>
						<div class="card-content">
							<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
								<thead>
									<tr>
										<th>Title</th>
										<th>Descrtiption</th>
										<th> Catergory</th>
										<th> Page</th>
										<th> Slug</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									@if(!empty($articles))
										@foreach($articles as $row)			
											<tr>
												<td>{{$row->title}}</td>
												<td>{{$row->descrtiption}}</td>
												<td>{{$row->category_id}}</td>
												<td>{{$row->page_id}}</td>
												<td>{{$row->Slug}}</td>
												<td>{{$row->created_at}}</td>
												<td>
													<div class='columns'>
														<div class='column'>
															<a class="button  is-link" href="{{route('artiles.show',$row['id'])}}">View</a> 
														</div>
														<div class='column'>
															<form  accept-charset="UTF-8" method="post" action="{{route('articles.destroy',$row['id'])}}">
															@csrf
															{{ method_field('DELETE') }}{{ method_field('DELETE') }}
															<button type="submit" class="button  is-link">Delete</button>
															</form>
														</div>
													</div>
												</td>
											</tr>
										@endforeach	
									@endif								
								</tbody>
							</table>
							@if ($articles->hasPages())
							<nav class="pagination is-centered is-small">
								@if ($articles->onFirstPage())
									<a class="pagination-previous" disabled>Previous</a>
								@else
									<a href="{{ $articles->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
								@endif
								@if ($articles->hasMorePages())
									<a class="pagination-next" href="{{ $articles->nextPageUrl() }}" rel="next">Next</a>
								@else
									<a class="pagination-next" disabled>Next page</a>
								@endif
								
								<ul class="pagination-list" role="navigation" aria-label="pagination">
										@if($articles->lastPage() >= 1 && $articles->currentPage() <=2 )
											<?php 
												$j=1;
												$page = $articles->lastPage();
											?>
		
										@else
											<?php
											 $j=$articles->currentPage()-5 ;
											 $page = currentPage()+5;
											?>
										@endif
										@for($i=$j; $i <=  ($page); $i++)
											<li>
											<a class="pagination-link" href="{{ $articles->url($i)}}" aria-label="Goto page 1">{{$i}}</a>
											</li>
										@endfor
										.....
										<a class="pagination-link" href="{{ $articles->url($articles->lastPage())}}" aria-label="Goto page Last Page">{{$articles->lastPage()}}</a>
											</li>
								</ul>
			
							</nav>
							@endif
				 
					  </div>
				</div>
			</div>
        </section>			  
		@include('partials.footer')
	</div>
</div>
@stop