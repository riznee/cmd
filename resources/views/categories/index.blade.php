@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col">
			<h2> Catergories </h2>

		</div>
		<div class="col">		
			<a href="{{route('categories.create')}}" class="card-header-icon" aria-label="more options">
				<span class="icon">
				  <i class="fas fa-plus" aria-hidden="true"></i>
				</span>
			</a>
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