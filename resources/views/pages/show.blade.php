@extends('layouts.admin')
@section('content')


    <div class="card has-background-success" style=" margin: 10px">
        <header class="card-header has-text-info-light">
            <a href="{{ url()->previous() }}" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </span>
            </a>
            <p class="card-header-title">
                View Page
            </p>
        </header>
        
    </div>
    <div class="box" style=" margin: 10px">

        <x-card :headers="$headers" :item="$page" :permissionname="$permisson" :option="$data"> </x-card>
    </div>

  
    
@stop
