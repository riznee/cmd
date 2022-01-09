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
		Recvied Messagers
	  </p>
	</header>
</div>


	<x-dataTable 
		:headers="$headers"
		:items="$contacts"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"
	></x-dataTable>

		

	
@stop