<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
		<a class="navbar-item" href="{{route('home')}}">  
			{{-- {{ config('app.name') }} --}}
      {{-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">  --}}
      <img src="{{ asset('enol/img/logoipsum-logo-55.svg') }}" width="200%" height="200%">
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