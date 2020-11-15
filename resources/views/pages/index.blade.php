@extends('layouts.admin')
@section('content')

	<h2>Page</h2>
    <div class="table-responsive">
    	<table class="table table-striped table-sm table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>slug</th>
              <th>Parent</th>
              <th>Depth</th>
              <th>Title</th>
              <th>Visible to public</th>
              <th>Created At </th>
              <th>Updated At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
			@if(!empty($pages))
				@foreach($pages as $row)			
					<tr>
						<td>{{$row->id}}</td>
						<td>{{$row->slug}}</td>
						<td>{{($row->parent->title ?? ' ')}}</td>
						<td>{{$row->depth}}</td>
						<td>{{$row->title}}</td>
						<td>
							@if($row->visible == true)
							<i class="fas fa-eye" aria-hidden="true"></i>
							@can('pages-disable')
							Change 
								<a class="btn btn-outline-primary" href="{{route('pages.disable',$row['id'])}}">
									<i class="far fa-eye-slash" aria-hidden="true"></i>
									
								</a>
								@endcan 
							@else
							<i class="far fa-eye-slash" aria-hidden="true"></i>
							@can('pages-enable')
								Change		
									<a class="btn btn-outline-primary" href="{{route('pages.enable',$row['id'])}}">
										<i class="fas fa-eye" aria-hidden="true"></i>
									</a>
								@endcan
							@endif  
						</td>						
						
						<td>{{$row->created_at}}</td>
						<td>{{$row->updated_at}}</td>
						<td>
							<div class="row">
								<div class="col-sm">

									@can('pages-edit')
									<a class=" btn btn-outline-primary" href="{{route('pages.show',$row['id'])}}">
										<i class="fas fa-pen" aria-hidden="true"></i>
									</a> 
									@endcan
								</div>

								<div class="col-sm">
									@can('pages-destroy')
									<form  accept-charset="UTF-8" method="post" action="{{route('pages.destroy',$row['id'])}}">
										@csrf
										{{ method_field('DELETE') }}{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-outline-danger">
											<i class="fas fa-times" aria-hidden="true"></i>
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
			<nav aria-label="Page Pagination">
				<ul class="pagination">
					@if ($pages->onFirstPage())
						<li class="page-item"><a class="pagination-previous" href="#">Previous</a></li>
					@else
						<li class="page-item"><a class="pagination-previous"  href="{{ $pages->previousPageUrl() }}" rel="prev">Previous</a></li>	
					@endif

					
					
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>


					@if ($pages->hasMorePages())
						<li class="page-item"><a class="page-link" href="{{ $pages->nextPageUrl() }}" rel="next">Next</a></li>
					@else
						<a class="pagination-next" disabled>Next page</a>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					@endif

					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
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
@stop
				 

		
	
