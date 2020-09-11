<nav class="navbar" style="navbar-height:10rem;">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
    {{--  <img src="{{URL::asset('img/favicon.png') }}" width="28" height="100">  --}}
    <span class="space"> &nbsp;&nbsp;</span>
    <h4 class="subtitle is-5 ">Enol</h4>
    </a>
  <div class="navbar-burger burger" data-target="navbar-enol">
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>
      
      <div id="navbar-enol" class="navbar-menu">
          <div class="navbar-start">
              <a class="navbar-item" href="{{route('admin')}}">
                Dashboard
              </a>  
              <a class="navbar-item" href="{{route('pages.index')}}">
               Pages
              </a>
              <a class="navbar-item" href="{{route('categories.index')}}">
                Category
              </a>
              <a class="navbar-item" href="{{route('articles.index')}}">
                Articles
              </a>

              <a class="navbar-item" href="{{route('settings.index')}}">
                Settings
              </a>
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


