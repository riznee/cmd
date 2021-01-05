@extends('layouts.admin')
@section('content')

<br/>

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
					<strong>Tax</strong>		
				</div>
				@can('roles-create')
				<div class="col-sm-9">
					<div class="float-right">
						<a href="{{route('tax.create')}}"  aria-label="">
							<i class="fas fa-plus" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				@endcan
			</div>
		</div>
	</div>

	<div class ="row">
		<x-dataTable
		:headers="$headers"
		:items="$tax"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"	
		>
		</x-dataTable>
	</div>
		

	
@stop