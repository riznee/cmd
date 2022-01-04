@extends('layouts.admin')
@section('content')
   
    
<div class="row justify-content-center">
        <x-pageHeader
            :title="$title"
            :permissionname="$permisson"
            :action="$action"
            :id="$id"
        >
        </x-pageHeader>
    
    <div class="row justify-content-center">
        <x-card
            :headers="$headers"
            :item="$page"
            :permissionname="$permisson"
            :action="$action"
            >
        </x-card>
    </div>
@stop