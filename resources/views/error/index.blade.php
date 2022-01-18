@extends('layouts.admin')
@section('content')



	<div class ="card  border-info mb-3">		
		<div class="card-header">
			<div class="row">
				<div class="col-sm-3">	 
					<a href="{{url()->previous()}}" class="card-header-icon" style="text-decoration: none;" aria-label="more options">
						<span class="icon">
							<i class="fas fa-arrow-left" aria-hidden="true"></i>
						</span>
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<strong>Error</strong>		
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-12 col-md-9">
			  <!-- 404 Error Text -->
			  <div class="text-center">
				<div class="error mx-auto" data-text="404">404</div>
					<p class="lead text-gray-800 mb-5">Page Not Found</p>
					<p class="text-gray-500 mb-0">It looks like you found a glitch</p>
					
				</div>
			</div>
		</div>
	</div>
	

	
@stop