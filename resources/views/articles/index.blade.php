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
			Articles
		</p>
		<a href="{{route('articles.create')}}" class="card-header-icon" aria-label="">
			<span class="icon">
				<i class="fas fa-plus" aria-hidden="true"></i>
			</span>
		</a>

	</header>
</div>

<x-dataTable
		:headers="$headers"
		:items="$articles"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"	
		>
</x-dataTable>

@stop