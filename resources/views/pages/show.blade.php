@extends('layouts.admin')
@section('content')
    <div class ="row">

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
    </div>
@stop