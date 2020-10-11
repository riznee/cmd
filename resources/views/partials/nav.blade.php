@if(Auth::check())
  <?php $user  = Auth::user(); ?>
@endif
<nav class="navbar is-fixed-top ">
        <div class="navbar-brand">
          <a class="navbar-item " href="{{route('home')}}">
          <span class="space"> &nbsp;&nbsp;</span>
          <h4 class="subtitle is-5 ">{{ config('app.name') }}</h4>
          </a>
        <div class="navbar-burger burger" data-target="navbar">
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>
      
      <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              @foreach($pages as $page)
              <p class="control">
                  <a class="navbar-item is-success" href="{{route('page',$page->slug)}}">
                    {{$page->title}}
                  </a>
              </p>
              @endforeach
            
              @if($user ?? '')
                <div class="navbar-item has-dropdown is-hoverable is-primary">
                    <a class="navbar-link button">
                      {{ $user->name}}  &nbsp; <i class="fas fa-user" aria-hidden="true"></i>
                    </a>
                    <div class="navbar-dropdown">
                      <a class="navbar-item">
                        Profile
                      </a>
                      <a class="navbar-item" href="{{route('logout')}}">
                        logout &nbsp; <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                      </a>
                    </div>
                </div>
    
              @else
                <p class="control">
                  <a class="navbar-item button is-primary" href="{{route('signup')}}">Sign Up  &nbsp; </a> 
                </p>                 
                <p class="control">
                  <a class="navbar-item button is-info" href="{{route('login')}}">Sign In  &nbsp; <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
                </p>
              @endif  
            </div>
          </div>
        </div>
      </div>
</nav>

<br/>