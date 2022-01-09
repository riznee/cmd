@extends('layouts.admin')
@section('content')

<div class="card has-background-success"style=" margin: 10px">
	<header class="card-header has-text-info-light">
		<a  href="{{url()->previous()}}" class="card-header-icon" aria-label="more options">
		  <span class="icon">
			<i class="fas fa-arrow-left" aria-hidden="true"></i>
		  </span>
	  	</a>
		<p class="card-header-title">
			Users
		</p>
		<a href="{{route('users.create')}}" class="card-header-icon" aria-label="">
			<span class="icon">
				<i class="fas fa-plus" aria-hidden="true"></i>
			</span>
		</a>

	</header>
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