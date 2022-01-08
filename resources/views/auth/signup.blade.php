@extends('layouts.plan')
@section('content')
  <section class="hero  is-fullheight">
    <div class="hero-body">
        <div class="container  has-text-centered">
            <h3 class="title has-text-black"> <a href="{{ route('home') }}">{{ config('app.name', 'SSCM') }}</a> </h3>
            <p class="subtitle has-text-black"> Please fill this form to create an account</p>
        <div class="column is-4 is-offset-4">
            <div class="box">
                <figure class="avatar">
                    <img src="{{ asset('img/pngwave.png') }}" alt="" width="100" height="100">
                </figure>
                
                <form   method="post" action="{{ route('signup.post') }}">

                    {{ csrf_field() }}

                    <div class="field">
                        <div class="control">
                            <input class="input"  name="email"  id="email" type="email" placeholder="Your Email" required>
                        </div>
                    </div>

                    <div class="field">
                      <div class="control">
                          <input class="input"  name="name"  id="email" type="text" placeholder="Your Name" required>
                      </div>
                  </div>

                    <div class="field">
                        <div class="control">
                            <input class="input"  type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="field">
                      <div class="control">
                          <input class="input"  type="password" id="inputPassword" name="confirm-password" class="form-control" placeholder="Password" required>
                      </div>
                  </div>

                   

                    <div style="align-content: center">
                        <button class="button is-success" type="submit">
                            Signup
                            &nbsp;
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </button>
                    </div>
                
                
                </form>
            </div>
        </div>
    </div>
</section>




  

@stop

