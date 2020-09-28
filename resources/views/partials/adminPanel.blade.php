<article class=" panel is-link">
    <p class="panel-header">
        <a class="navbar-item" href="{{route('admin')}}">
            Dashboard
        </a>  
    </p>

    <a class="panel-block" href="{{route('pages.index')}}">
        {{--  <i class="fas fa-align-justify" aria-hidden="true"></i>  --}}
        &nbsp; Pages
    </a>

    <a class="panel-block" href="{{route('categories.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Category
    </a>

    <a class="panel-block" href="{{route('articles.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Articles
    </a>

    <a class="panel-block" href="{{route('settings.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Settings
    </a>

    <a class="panel-block" href="{{route('user.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; User Managment
    </a>


</article>