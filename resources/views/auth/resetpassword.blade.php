@extends('layouts.plan')
@section('content')

<section class="hero  is-fullheight">
  <div class="hero-body">
    <div class="container is-info has-text-centered">
      <div class="column is-4 is-offset-4">
      <h3 class="title">
          <a  href="{{route('home')}}">
          {{ config('app.name', 'SSCM') }}
        </a>
        </h3>
        <hr class="login-hr">
        <p class="subtitle has-text-black">Reset Pasword</p>

            <form method="post" action="{{route('resetpassword.post')}}">
              {{ csrf_field() }}
              <div class="box">
                <figure>
                  <img id="loginImage" src="{{asset('img/pngwave.png')}}">
                </figure>

                <input type="hidden" name="email" value="{{$user->email}}">               
                
                <div class="field">
                  <p class="control has-icons-left">
                    <input class="input" name="password" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p> 
                </div>
                <div class="field">
                  <p class="control has-icons-left">
                    <input class="input" name="confirm-password" type="password" placeholder="confrimPassword">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p> 
                </div>
              
              
                <div class="field">
                  <p class="control">
                    <button class="button is-block is-info is-large is-fullwidth">Reset <i class="fas fa-key" aria-hidden="true"></i></button>
                  </p>   
                </div> 
              
            </div>
          </form>
        
      </div>        
    </div>
  </div>
</section>

@stop



{{--  <section  class="level">
  <div class="level-item has-text-centered"> 
    <div class="hero is-large" style="justify-content: center">
      
    </div>
  </div>
</section>  --}}