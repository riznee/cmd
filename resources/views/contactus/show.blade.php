@extends('layouts.admin')
@section('content')

    <br />

    <div class="card has-background-success" style=" margin: 10px">
        <header class="card-header has-text-info-light">
            <a href="{{ url()->previous() }}" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </span>
            </a>
            <p class="card-header-title">
                Message
            </p>

        </header>
    </div>

    <div class="container" style="width:60%">
        <x-card :headers="$headers" :item="$message">
        </x-card>
    </div>
@stop
