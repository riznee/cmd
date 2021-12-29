@extends('layouts.admin')
@section('content')
    <div>
        <div class="box">
            {{$permisson}}
        </div>
        {{-- {{$headers}} --}}
        <br>
        <br>
        {{$action}}
        <br>
        {{$message}}
    </div>
@stop