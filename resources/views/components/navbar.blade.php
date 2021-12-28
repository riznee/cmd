<?php 
  if(Auth::check())
  {
    $user  = Auth::user();
  } 

?>


<nav class="navbar navbar-expand-md  fixed-top "> 
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
      <li class="nav-item">
        <a class=" btn   btn-outline" href="{{route('signup')}}">Sign Up  &nbsp; </a>  &nbsp;              
      </li>
      <li class="nav-item">
        <a class=" btn  btn-outline" href="{{route('login')}}">Sign In  &nbsp; <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
      </li>
      @endguest
    </ul>

</nav>