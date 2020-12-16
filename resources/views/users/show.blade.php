@extends('layouts.admin')
@section('content')
    <div class ="row">
       
        <x-card
        :headers="$headers"
		:item="$user"
		:permissionname="$permisson"
		:action="$action"
        >
        </x-card>

        <div class="card border-info mb-3" >
            <div class="card-header">Roles</div>
            <div class="card-body">
              <h5 class="card-title">Assigned Role</h5>
              {{  $user->roles()->pluck('name')->implode(' ') }}
             
            </div>
          </div>

    </div>
@stop