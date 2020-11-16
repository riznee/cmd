@extends('layouts.plan')
@section('content')
<div class="sigle-page">

  <form class="form-signin" method="post" action="{{ route('login.post') }}">
      <h3>
          <a href="{{ route('home') }}">{{ config('app.name', 'SSCM') }}</a>
      </h3>

      <img src="{{ asset('img/pngwave.png') }}" alt="" width="150" height="150">

      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
      <label for="inputEmail" class="sr-only">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name" required autofocus>
      <br>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name"email"  class="form-control" placeholder="Email address" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

      <br>
      <label for="inputPassword" class="sr-only">Confirm Password</label>
      <input type="password" id="inputPassword" name="confirm-password" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in
        <i class="fas fa-user" aria-hidden="true"></i>
      </button>
  </form>

</div>

@stop

