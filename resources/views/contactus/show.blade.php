@extends('layouts.admin')
@section('content')

<br/>

    <div class ="container" style="width:100%">
        <x-pageHeader
            :title="$title"
            :permissionname="$permisson"
            :action="$action"
            :id="$id"
        >
        </x-pageHeader>
    </div>
    <div class ="container" style="width:60%">
        <x-card
        :headers="$headers"
        :item="$message"    
        >
        </x-card>
    </div>
@stop