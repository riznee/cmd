@extends('layouts.plan')
@section('content')

<div class="sigle-page">

  <form class="form-signin" method="post" action="{{route('reset.post')}}">
      <h3>
          <a href="{{ route('home') }}">{{ config('app.name', 'SSCM') }}</a>
      </h3>

      <img src="{{ asset('img/pngwave.png') }}" alt="" width="150" height="150">
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Resest Password</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in
        <i class="fas fa-envelope" aria-hidden="true"></i>
      </button>
  </form>

</div>


@stop

