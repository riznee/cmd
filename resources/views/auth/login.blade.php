@extends('layouts.app')
@section('content')
<div class="container is-fluid ">
	<div class="wrapper">
		<head>
			@include('partials.loginnav')
		</head>
		<div class="hero is-fullheight">
			<div class="hero-body has-text-centered" style="justify-content: center">
        <article class="message is-primary">
          <form class=""method="post" action="{{route('login.post')}}">
          <div class="message-header">
            Admin Access Panel
          </div>
          {{ csrf_field() }}
            <div class="message-body">
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
                  <button class="button is-success">
                    Login
                  </button>
                </p>
              </div>
            </div>            
          </form>	
        </article>
      </div>
	  </div>
		@include('partials.footer')
	</div>
</div>
@stop
