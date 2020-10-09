<nav class="navbar is-fixed-top ">
        <div class="navbar-brand">
          <a class="navbar-item " href="{{route('home')}}">
          {{--  <img src="{{URL::asset('img/favicon.png') }}" width="28" height="100">  --}}
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
                  <a class="navbar-item" href="{{route('page',$page->slug)}}">
                    {{$page->title}}
                  </a>
                  @if($page->childrean)
                    have
                  @endif
              </p>
              @endforeach
              <p class="control">
                <a class="navbar-item" href="{{route('contactus')}}">
                 Contact Us
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
</nav>
@include('partials.flash-message')
<br/>