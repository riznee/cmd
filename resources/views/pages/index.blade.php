@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col">
			<h2> Pages </h2>

		</div>
		<div class="col">		
			<a href="{{route('pages.create')}}"  aria-label="">
				<i class="fas fa-plus" aria-hidden="true"></i>
			</a>
			
		</div>
	</div>

	<div class ="row">
		<x-dataTable
		:headers="$headers"
		:items="$pages"
		:permissionname="$permisson"
		:action="$action"	
		></x-dataTable>
	</div>
		

	
@stop