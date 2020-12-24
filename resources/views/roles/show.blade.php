
@extends('layouts.admin')
@section('content')
<?php

?>

    <div class ="row">
        <br/>
        <hr/>
       
        <x-card
          :title="$title"
          :headers="$headers"
          :item="$data[0]"
          :permissionname="$permisson"
          :action="$action"
        >
        </x-card>

        <div class="card  border-info mb-3">
          <div class="card-header">Permissions</div>
          <div class="card-body text-dark">
            <div class ="row">
              @foreach( $data[0]['permissions'] as $row)
                <div class="col col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="{{$row['id']}}" checked>
                    <label class="form-check-label" ><storng>  {{$row['name']}} </storng></label>
                  </div>            
                </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
@stop