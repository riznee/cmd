<aside class="menu">
    <p class="menu-label">Dashboard </p>
    <ul class="menu-list">
        <ul>
            @can('pages-index')
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action" href="{{route('pages.index')}}">
                        <i class="fas fa-file" aria-hidden="true"></i>
                        &nbsp; Pages
                    </a>
                </li>
            @endcan  
            
            @can('articles-index')
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action" href="{{route('articles.index')}}">
                        <i class="fas fa-book-reader" aria-hidden="true"></i>
                        &nbsp; Articles
                    </a>
                </li>
            @endcan

            @can('contactus-index')
                <li class="nav-item">
                    <a class="list-group-item list-group-item-action" href="{{route('contactus.index')}}">
                        <i class="fas fa-book-open" aria-hidden="true"></i>
                        &nbsp; Recived Messagers
                    </a>
                </li>
            @endcan
               
          
        </ul>	
    </ul>
    <p class="menu-label">&nbsp;&nbsp;
        Setting and Configuration
    </p>
        <ul class="menu-list">
            @can('users-index')
            <li class="nav-item">
                <a class="list-group-item list-group-item-action" href="{{route('users.index')}}">
                    <i class="fas fa-user" aria-hidden="true"></i>
                    &nbsp; Users
                </a>
            </li>
        @endcan
        
        @can('roles-index')
            <li class="nav-item">
                <a class="list-group-item list-group-item-action" href="{{route('roles.index')}}">
                    <i class="fab fa-redhat" aria-hidden="true"></i>
                    &nbsp; Role Managment
                </a>
            </li>
        @endcan



        <li class="nav-item">
            <a class="list-group-item list-group-item-action" href="{{route('settings.index')}}">
                <i class="fab fa-whmcs"></i>
                &nbsp; Site Settings
            </a>
        </li>

    </ul>
</aside>








