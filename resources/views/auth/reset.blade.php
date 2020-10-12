@extends('layouts.plan')
@section('content')

<section class="hero  is-fullheight">
  <div class="hero-body">
    <div class="container is-info has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title has-text-black">
          <a  href="{{route('home')}}">
          {{ config('app.name', 'SSCM') }}
        </a>
        </h3>
        <hr class="login-hr">
        <p class="subtitle has-text-black">Resest Password</p>

            <form method="post" action="{{route('reset.post')}}">
              {{ csrf_field() }}
              <div class="box">
                <figure>
                  <img id="loginImage" src="{{asset('img/pngwave.png')}}">
                </figure>
                
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" name="email" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </p>
                </div>               
              
              
                <div class="field">
                  <p class="control">
                    <button class="button is-block is-info is-large is-fullwidth">Send Reset Request <i class="fas fa-envelope" aria-hidden="true"></i></button>
                  </p>       
                </div> 
              
            </div>
          </form>
        
      </div>        
    </div>
  </div>
</section>

@stop
