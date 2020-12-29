
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
          {{$permissionList ?? ''}}
          <div class="card-body text-dark">
            <form method="patch" action="./">
              {{ csrf_field() }}
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
              <button  type="submit" >Save</button>
            </form>
          </div>
        </div>
    </div>
@stop