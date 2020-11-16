@extends('layouts.plan')
@section('content')
    <div class="sigle-page">

        <form class="form-signin" method="post" action="{{ route('login.post') }}">
            <h3>
                <a href="{{ route('home') }}">{{ config('app.name', 'SSCM') }}</a>
            </h3>

            <img src="{{ asset('img/pngwave.png') }}" alt="" width="150" height="150">

            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in
                <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
            </button>
            <p class="has-text-grey">
                <a href="{{ route('signup') }}/">Sign Up</a> &nbsp;·&nbsp;
                <a href="{{ route('reset') }}">Forgot Password</a>
            </p>
        </form>

    </div>
@stop
