@extends('layouts.plan')
@section('content')

<section class="hero  is-fullheight">
  <div class="hero-body">
    <div class="container is-info has-text-centered">
      <div class="column is-4 is-offset-4">
        <h3 class="title has-text-black">ENOL</h3>
        <hr class="login-hr">
        <p class="subtitle has-text-black">Sign in </p>

            <form method="post" action="{{route('login.post')}}">
              {{ csrf_field() }}
              <div class="box">
                <figure class="avatar">
                  <img id="logigImage" src="{{asset('img/pngwave.png')}}">
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
                  <p class="control has-icons-left">
                    <input class="input" name="password" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                  </p> 
                </div>
              
              
                <div class="field">
                  <p class="control">
                    <button class="button is-block is-info is-large is-fullwidth">Login <i class="fas fa-sign-in-alt" aria-hidden="true"></i></button>
                  </p>
                  <p class="has-text-grey">
                    <a href="{{route('signup')}}/">Sign Up</a> &nbsp;·&nbsp;
                    <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                    <a href="../">Need Help?</a>
                  </p>         
                </div> 
              
            </div>
          </form>
        
      </div>        
    </div>
  </div>
</section>

@stop
