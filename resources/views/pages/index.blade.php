@extends('layouts.admin')
@section('content')


	<x-datatable
	:headers="$headers"
	:data="$pages"
	:permissionname="$permissionNamee ?? ''"
	></x-datatable>
	
@stop