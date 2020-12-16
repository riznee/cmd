@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col">
			<h2> Users </h2>
		</div>
	</div>

	<div class ="row">
		<x-dataTable
		:headers="$headers"
		:items="$users"
		:permissionname="$permisson"
		:action="$action"
	
		>
		</x-dataTable>
	</div>
		

	
@stop