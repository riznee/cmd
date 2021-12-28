@extends('layouts.admin')
@section('content')
    <div class ="row">
        <x-card
        :headers="$headers"
		:item="$message"
		:permissionname="$permisson"
		:action="$action"
        >

        </x-card>
    </div>
@stop