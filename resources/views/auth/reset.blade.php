@extends('layouts.plan')
@section('content')

<section class="hero  is-fullheight">
  <div class="hero-body">
      <div class="container  has-text-centered">
          <h3 class="title has-text-black"> <a href="{{ route('home') }}">{{ config('app.name', 'SSCM') }}</a> </h3>
          <p class="subtitle has-text-black">Please enter your email to process password reset.</p>
      <div class="column is-4 is-offset-4">
          <div class="box">
              <figure class="avatar">
                  <img src="{{ asset('enol/img/pngwave.png') }}" alt="" width="100" height="100">
              </figure>
              
              <form   method="post" action="{{route('reset.post')}}">

                  {{ csrf_field() }}

                  <div class="field">
                      <div class="control">
                          <input class="input"  name="email"  id="email" type="email" placeholder="Your Email" required>
                      </div>
                  </div>

                  

                  <div style="align-content: center">
                      <button class="button is-success" type="submit">
                        Reset&nbsp;&nbsp;
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                      </button>
                  </div>
              
              
              </form>
          </div>
      </div>
  </div>
</section>




@stop

