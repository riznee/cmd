@extends('layouts.plan')
@section('content')

    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                {{-- {{ config('app.name') }} --}}
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    </nav>

    <div class="hero is-fullheight">

      <div class="card" style=" margin: 10px">
        <div class="card-content">
            <div class="columns">
                <div class="column">
                    <p class="is-size-7">Hi  {{ $user->name }}</p>
                </div>
            </div>
            <p  > Regarding your inquery about : <strong>{{$user->subject}}</strong></p>
            <hr/>
            <p>
                {{--  { html_entity_decode($message)}  --}}
                {{$message}}
            </p>

        </div>

    </div>
    
    </div>
@stop
