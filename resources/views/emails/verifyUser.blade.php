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
          <p class="subtitle has-text-black"> </p>
          <p class="subtitle">
            Hello {{$user->name}} 
          </p>
          <p class="subtitle">
          Thank you for siginig up to {{ config('app.name', 'SSCM') }}
          </p>

              <div class="field">
                    <p class="control">
                        Click the link to verifiy your account 
                    <a class="button is-rounded is-success" href="{{url('user/verify', $user->verifyUser->token)}}"> Verify account </a>
                    </p>
                        
                    Thank you for your Support            
              </div>
            </form>        
        </div>        
      </div>
    </div>
  </section>
@stop



