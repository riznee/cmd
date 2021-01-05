@extends('layouts.admin')
@section('content')

	<br/>

	<div class ="card  border-info mb-3">		
		<div class="card-header">
			<div class="row">
				<div class="col-sm-3">	 
					<a href="{{URL::previous()}}" class="card-header-icon" aria-label="more options">
						<span class="icon">
							<i class="fas fa-arrow-left" aria-hidden="true"></i>
						</span>
					</a>
					&nbsp;&nbsp;
					<strong>Roles</strong>		
				</div>
				@can('roles-create')
				<div class="col-sm-9">
					<div class="float-right">
						<a href="{{route('roles.create')}}"  aria-label="">
							<i class="fas fa-plus" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				@endcan
			</div>
		</div>
	</div>

		<x-dataTable
		:headers="$headers"
		:items="$roles"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"	
		>
		</x-dataTable>
	</div>	
@stop