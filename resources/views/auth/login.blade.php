@extends('layouts.app')
@section('content')
<div class="container is-fluid ">
	<div class="wrapper">
		<head>
			@include('partials.loginnav')
    </head>

    <section class="section">
      <div class="columns is-large">
        <div class="column is-one-quarter"></div>
        <div class="column is-half" style="height: 80%" >
          <div class="card">                  
            <form class="has-background-primary-light"method="post" action="{{route('login.post')}}">
                    <div class="card-header-title has-text-info-dark" style="justify-content: center">
                      Admin Access Panel
                    </div>
                    <br>
                      {{ csrf_field() }}
                      <div class="card-content">

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
                      </div>
                      <div class ="card-footer"  style="justify-content: center">
                        <div class="field">
                          <p class="control">
                            <button class="button is-primary is-outlined">
                              Login
                            </button>
                          </p>
                        </div>
                      </div> 

                    </div>
              </form>
            </div>
          </div>             
        </div>
			</div>
		</section>
	
	</div>
</div>
@stop



{{--  <section  class="level">
  <div class="level-item has-text-centered"> 
    <div class="hero is-large" style="justify-content: center">
      
    </div>
  </div>
</section>  --}}
