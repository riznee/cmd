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

        <div class="card border-info mb-3" >
            <div class="card-header">
            
            </div>
            <div class="card-body">
              {{  $user->roles()->pluck('name')->implode(' ') }}     
            </div>
          </div>

    </div>
@stop