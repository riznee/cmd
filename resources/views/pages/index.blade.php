@extends('layouts.admin')
@section('content')

	<div class ="row">
		<div class="col"> Pages</div>
	</div>
	<x-dataTable
	:headers="$headers"
	:items="$pages"
	:permissionname="$permisson"
	:action="$action"
	
	></x-dataTable>
	
@stop