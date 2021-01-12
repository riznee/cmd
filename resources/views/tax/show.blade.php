@extends('layouts.admin')
@section('content')
    <div class ="row">
        <br/>
        <hr/>
       
        <x-card
          :title="$title"
          :headers="$headers"
          :item="$tax"
          :permissionname="$permisson"
          :action="$action"
        >
        </x-card>


    </div>
@stop