@extends('layouts.admin')
@section('content')

<br/>
<div class ="card  border-info mb-3">		
		<div class="card-header">
			<div class="row">
				<div class="col-sm-3">	 
					<a href="{{URL::previous()}}" style="text-decoration: none;" class="card-header-icon">
						<i class="fas fa-arrow-left" aria-hidden="true"></i>
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<strong>Users</strong>		
				</div>
				@can('roles-create')
				<div class="col-sm-9">
					<div class="float-right">
						<a href="{{route('users.create')}}"  aria-label="">
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
		:items="$users"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"	
		>
		</x-dataTable>
	</div>
@stop