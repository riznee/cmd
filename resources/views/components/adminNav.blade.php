{{--  <nav class="navbar navbar-expand-md  fixed-top "> 
  <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="enol-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="#navbar">
    <ul class="navbar-nav ml-auto">
     
      @if($user ?? '')
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ $user->name}}</a>
        <div class="dropdown-menu" aria-labelledby="userprofile">
          <a class="dropdown-item" href="{{route('dashboard')}}">UserDashbord</a>
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
      @endif
    </ul>

</nav>  --}}

<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
		<a class="navbar-item" href="{{route('home')}}">  
			{{-- {{ config('app.name') }} --}}
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

 
	

    @auth
    	<div class="navbar-end">
      		<div class="navbar-item">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                {{ $user->name}}
              </a>
            <div class="navbar-dropdown">
              <a class="navbar-item"  href="{{route('dashboard')}}"> Dashboard</a>
              <a class="navbar-item"  href="{{route('logout')}}"> Logout</a>
					</div>
				</div>

			</div>
		</div>   
      
    @endauth
      
  </div>
</nav>