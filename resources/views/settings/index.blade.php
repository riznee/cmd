@extends('layouts.admin')
@section('content')
    <div class ="row">
       
		<x-card
		:title="$title"
        :headers="$headers"
		:item="$settings"
		:permissionname="$permisson"
		:action="$action"
        >
        </x-card>


    </div>
@stop