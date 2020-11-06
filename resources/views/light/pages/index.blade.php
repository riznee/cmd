@extends('layouts.app')
@section('content')
<div class="container is-fluid">
	<div class="wrapper">
		<head class="p-6">
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
							Pages
						  </p>
						  <a href="{{route('pages.create')}}" class="card-header-icon" aria-label="more options">
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
										<th>Parent</th>
										<th> Depth</th>
										<th> Title</th>
										<th> Visible to Public </th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									@if(!empty($pages))
										@foreach($pages as $row)			
											<tr>
												<td>{{$row->slug}}</td>
												<td>{{($row->parent->title ?? ' ')}}</td>
												<td>{{$row->depth}}</td>
												<td>{{$row->title}}</td>												
												@if($row->visible == true )
													<td>Yes</td>
												@else
													<td>No</td>
												@endif
												<td>{{$row->created_at}}</td>
												<td>
													<div class='columns'>
														@can('pages-edit')
														<div class='column'>
															<a class=" button is-rounded is-link is-small" href="{{route('pages.show',$row['id'])}}">
																<i class="fas fa-eye" aria-hidden="true"></i>
																	&nbsp; View
															</a> 

														</div>
														@endcan

														<div class="column">
															@if($row->visible == true)
															@can('pages-disable')
															<a class=" button is-inverted is-link is-small" href="{{route('pages.disable',$row['id'])}}">
																<i class="fas fa-eye" aria-hidden="true"></i>
																&nbsp; Disable
															</a>
															@endcan 
															@else
															@can('pages-enable')
																<a class=" button is-inverted is-link is-small" href="{{route('pages.enable',$row['id'])}}">
																	<i class="fas fa-eye" aria-hidden="true"></i>
																	&nbsp; Enable
																</a>
															@endcan
															@endif  
														</div>

														<div class='column'>
															@can('pages-destroy')
															<form  accept-charset="UTF-8" method="post" action="{{route('pages.destroy',$row['id'])}}">
															@csrf
															{{ method_field('DELETE') }}{{ method_field('DELETE') }}
																<button type="submit" class="button is-rounded is-link is-small">
																	<i class="fas fa-times" aria-hidden="true"></i>
																	&nbsp;	Delete
																</button>
															</form>
															@endcan
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
							@if ($pages->hasPages())
							<nav class="pagination is-centered is-small">
								@if ($pages->onFirstPage())
									<a class="pagination-previous" disabled>Previous</a>
								@else
									<a href="{{ $pages->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
								@endif
								@if ($pages->hasMorePages())
									<a class="pagination-next" href="{{ $pages->nextPageUrl() }}" rel="next">Next</a>
								@else
									<a class="pagination-next" disabled>Next page</a>
								@endif
								
								<ul class="pagination-list" role="navigation" aria-label="pagination">
										@if($pages->lastPage() >= 1 && $pages->currentPage() <=2 )
											<?php 
												$j=1;
												$page = $pages->lastPage();
											?>
		
										@else
											<?php
											 $j=$pages->currentPage()-5 ;
											 $page = currentPage()+5;
											?>
										@endif
										@for($i=$j; $i <=  ($page); $i++)
											<li>
											<a class="pagination-link" href="{{ $pages->url($i)}}" aria-label="Goto page 1">{{$i}}</a>
											</li>
										@endfor
										.....
										<a class="pagination-link" href="{{ $pages->url($pages->lastPage())}}" aria-label="Goto page Last Page">{{$pages->lastPage()}}</a>
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