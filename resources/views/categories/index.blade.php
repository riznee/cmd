@extends('layouts.admin')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head class="p-6">
		
		</head>
		<section class="columns">
			<div class="column is-one-fifth">
				
			</div>
			<div class="column">
				<div class="hero is-fullheight">
					<div class="card">
						<header class="card-header">
						  <p class="card-header-title">
							Category
						  </p>
						  <a href="{{route('categories.create')}}" class="card-header-icon" aria-label="more options">
							<span class="icon">
							  <i class="fas fa-plus" aria-hidden="true"></i>
							</span>
						  </a>
						</header>
						<div class="card-content">
							<table class="table  is-striped is-narrow is-hoverable is-fullwidth" style="justify-content: center">
								<thead>
									<tr>
										<th>Slug</th>
										<th>Title</th>
										<th> Description</th>
										<th> Color</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									@if(!empty($categories))
										@foreach($categories as $row)			
											<tr>
												<td>{{$row->slug}}</td>
												<td>{{$row->title}}</td>
												<td>{{$row->description}}</td>
												<td>{{$row->color}}</td>
												<td>{{$row->created_at}}</td>
												<td>
													<div class='columns'>
														<div class='column'>
															<a class=" button is-rounded is-link is-small" href="{{route('categories.show',$row['id'])}}">
																<i class="fas fa-eye" aria-hidden="true"></i>
																	&nbsp; View
															</a> 

														</div>
														<div class='column'>
															<form  accept-charset="UTF-8" method="post" action="{{route('categories.destroy',$row['id'])}}">
															@csrf
															{{ method_field('DELETE') }}{{ method_field('DELETE') }}
																<button type="submit" class="button is-rounded is-link is-small">
																	<i class="fas fa-times" aria-hidden="true"></i>
																	&nbsp;	Delete
																</button>
															</form>
														</div>
													</div>
												</td>
											</tr>
										@endforeach
									@else
										<tr> No Data</tr>
									@endif								
								</tbody>
							</table>
							@if ($categories->hasPages())
							<nav class="pagination is-centered is-small">
								@if ($categories->onFirstPage())
									<a class="pagination-previous" disabled>Previous</a>
								@else
									<a href="{{ $categories->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
								@endif
								@if ($categories->hasMorePages())
									<a class="pagination-next" href="{{ $categories->nextPageUrl() }}" rel="next">Next</a>
								@else
									<a class="pagination-next" disabled>Next page</a>
								@endif
								
								<ul class="pagination-list" role="navigation" aria-label="pagination">
										@if($categories->lastPage() >= 1 && $categories->currentPage() <=2 )
											<?php 
												$j=1;
												$page = $categories->lastPage();
											?>
		
										@else
											<?php
											 $j=$categories->currentPage()-5 ;
											 $page = currentPage()+5;
											?>
										@endif
										@for($i=$j; $i <=  ($page); $i++)
											<li>
											<a class="pagination-link" href="{{ $categories->url($i)}}" aria-label="Goto page 1">{{$i}}</a>
											</li>
										@endfor
										.....
										<a class="pagination-link" href="{{ $categories->url($categories->lastPage())}}" aria-label="Goto page Last Page">{{$categories->lastPage()}}</a>
											</li>
								</ul>
			
							</nav>
							@endif
				 
					  </div>
				</div>
			</div>
        </section>			  

	</div>
</div>
@stop