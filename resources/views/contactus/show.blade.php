@extends('layouts.admin')
@section('content')

<br/>
<div>
    <x-pageHeader
        :title="$title"
		:permissionname="$permisson"
		:action="$action"
        :id="$id"
    >
    </x-pageHeader>

    <x-card
    :headers="$headers"
    :item="$message"    
    >
    </x-card>
</div>
@stop