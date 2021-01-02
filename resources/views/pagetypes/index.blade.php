@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col">
			<h2>Page Types </h2>

		</div>
		
	</div>

	<div class ="row">
		<x-dataTable
		:headers="$headers"
		:items="$pagetypelist"
		:permissionname="$permisson"
		:action="$action"
		:option="$data"
		></x-dataTable>
	</div>
		

	
@stop