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
        <p class="subtitle has-text-black"> Password Reset</p>
        <p class="subtitle">
            {{$user['name']}} here was recently a request to change the password on your account.
        </p>
        <p class="subtitle">
        Click below to confirm this change:
        </p>

            <div class="field">
                  <p class="control">
                    <a class="button is-rounded is-success" href="{{url('user/password-reset', $user->passwordReset->token)}}"> Reset Password </a>
                  </p>
                  <p class="has-text-grey">
                    Did not ask to reset your password? If you didnt ask for your password, 
                    it is likely that another user entered your username or email address by
                    mistake while trying to reset their password. If that is the case, 
                    you do not need to take any further action and can safely disregard this email.
                  </p>  
            </div>
          </form>
        
      </div>        
    </div>
  </div>
</section>
@stop

