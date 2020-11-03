<article class=" panel is-link">
    <p class="panel-header">
        <a class="navbar-item" href="{{route('dashboard')}}">
            Dashboard
        </a>  
    </p>
    @can('pages-index')
    <a class="panel-block" href="{{route('pages.index')}}">
        {{--  <i class="fas fa-align-justify" aria-hidden="true"></i>  --}}
        &nbsp; Pages
    </a>
    @endcan

    @can('categories-index')
    <a class="panel-block" href="{{route('categories.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Category
    </a>
    @endcan

    @can('articles-index')
    <a class="panel-block" href="{{route('articles.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Articles
    </a>
    @endcan


    <a class="panel-block" href="{{route('settings.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Settings
    </a>

    @can('users-index')
    <a class="panel-block" href="{{route('users.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; User Managment
    </a>
    @endcan

    @can('role-list')
    <a class="panel-block" href="{{route('roles.index')}}">
        {{--  <i class="fas fa-book" aria-hidden="true"></i>  --}}
        &nbsp; Roles Managment
    </a>
    @endcan


</article>