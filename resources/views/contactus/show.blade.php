@extends('layouts.admin')
@section('content')
    <div class ="row">
        <x-card
        :headers="$headers"
		:item="$page"
		:permissionname="$permisson"
		:action="$action"
        >

        </x-card>
    </div>
@stop