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
					<h6 class="subtitle is-5">Service List</h6>
					<table class="table is-striped is-bordered">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Active </th>
									<th>Created At</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($services as $row)				
									<tr>
										<td>{{$row->name}}</td>
										@if($row->active ==1)
											<td> Yes </td>
										@else
											<td> No</td>
										@endif
										<td>{{$row->created_at}}</td>
										<td>
											<div class='columns'>
												<div class='column'>
													@if($row->active ==1)
														<a class="button  is-warning" href="{{route('services.active',$row['id'])}}"><i class="fas fa-eye-slash"></i></a>
													@else
														<a class="button  is-link" href="{{route('services.active',$row['id'])}}"><i class="fas fa-eye"></i></a>
													@endif
												</div>
		
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
			 
			</div>
		</div>	  
		@include('partials.footer')
	</div>
</div>
@stop