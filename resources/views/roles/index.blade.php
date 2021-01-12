@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col">
			<h2> Roles </h2>
		</div>
	</div>

	<div class ="row">
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