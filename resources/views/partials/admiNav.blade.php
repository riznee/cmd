<div class="card">
<nav class="navbar" style="navbar-height:10rem;">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
      <span class="space"> &nbsp;&nbsp;</span>
      <h4 class="subtitle is-5 ">{{ config('app.name') }}</h4>
      </a>
    <div class="navbar-burger burger" data-target="navbar-enol">
              <span></span>
              <span></span>
              <span></span>
          </div>
        </div>
        
        <div id="navbar-enol" class="navbar-menu">
            <div class="navbar-start">
                
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
              <div class="feild is grouped">
                <p class="control">
                    <a class="button is-white" href="{{route('logout')}}">
                      <span class="icon">
                        <i class="fas fa-sign-out-alt"></i>
                      </span>
                      <span>Sign out</span>
                    </a>
                  </p>
              </div>
            </div>
        </div>
    </div>
  </nav>
</div>
@include('partials.flash-message')
<br/>


