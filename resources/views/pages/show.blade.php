@extends('layouts.admin')
@section('content')
   

    <x-pageHeader
        :title="$title"
        :permissionname="$permisson"
        :action="$action"
        :id="$id"
    >
    </x-pageHeader>
        <x-card
        :headers="$headers"
		:item="$page"
		:permissionname="$permisson"
		:action="$action"
        >

        </x-card>
   
@stop