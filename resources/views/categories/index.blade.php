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
					<strong>Catergories</strong>		
				</div>
				@can('categories-create')
				<div class="col-sm-9">
					<div class="float-right">
						<a href="{{route('categories.create')}}"  aria-label="">
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
		:items="$categories"
		:permissionname="$permisson"
		:action="$action"	
		></x-dataTable>
	</div>
		

	
@stop