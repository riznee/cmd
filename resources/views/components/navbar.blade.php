<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
		<a class="navbar-item" href="{{route('home')}}">{{ config('app.name') }}
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      	<div class="navbar-item has-dropdown is-hoverable">
			@foreach($pages as $page)
				@if($page->slug =='contactus')
				<a class="navbar-item" href="{{route('contactus.form')}}">
					{{$page->title}}
				</a>
				@elseif($page->slug =='home')
				<a class="navbar-item" href="{{route('home')}}">
					{{$page->title}}
				</a>
				@else
				<a class="navbar-item" href="{{route('page',$page->slug)}}">
				{{$page->title}}
				</a>
				@endif
			@endforeach
		</div>
	</div>
	



    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" >
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

{{-- <nav class="navbar navbar-expand-md  fixed-top "> 
  <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="enol-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="#navbar">
    <ul class="navbar-nav ml-auto">

      @foreach($pages as $page)
        <li class="nav-item">
            @if($page->slug =='contactus')
            <a class="nav-link" href="{{route('contactus.form')}}">
                {{$page->title}}
            </a>
            @elseif($page->slug =='home')
            <a class="nav-link" href="{{route('home')}}">
                {{$page->title}}
            </a>
            @else
            <a class="nav-link" href="{{route('page',$page->slug)}}">
            {{$page->title}}
            </a>
            @endif
        </li>
      @endforeach

      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userprofile" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ $user->name}}</a>
        <div class="dropdown-menu" aria-labelledby="userprofile">
          <a class="dropdown-item" href="{{route('dashboard')}}">UserDashbord</a>
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
      @endauth

      @guest
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userprofile" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login/Sign up</a>
        <div class="dropdown-menu" aria-labelledby="userprofile">
          <a class="dropdown-item" href="{{route('signup')}}">Sign Up  &nbsp; </a>            
          <a class="dropdown-item" href="{{route('login')}}">Sign In  &nbsp; <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
        </div>
      </li>
      @endguest
    </ul>

</nav> --}}