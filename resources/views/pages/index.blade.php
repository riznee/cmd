@extends('layouts.admin')
@section('content')


	<x-datatable
	:headers="$headers"
	:items="$pages"
	:permissionname="$permisson"
	:action="$action"

	></x-datatable>
	
@stop