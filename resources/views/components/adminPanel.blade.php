<nav id="sidebarMenu" class="col-md-3 col-lg-1 d-md-block  sidebar collapse">
    <div class="sidebar  pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    Dashboard
                </a>
            </li>

            {{--  Site Managment access  --}}

            <li class="nav-item">
                <a  class="nav-link" href="#websitesetting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fab fa-connectdevelop"  aria-hidden="true"></i>
                    &nbsp; Web Setting
                </a>

                <ul class="collapse list-unstyled sublist" id="websitesetting">
                    @can('pages-index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pages.index')}}">
                                <i class="fas fa-file" aria-hidden="true"></i>
                                &nbsp; Pages
                            </a>
                        </li>
                    @endcan                  

                    @can('articles-index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('articles.index')}}">
                                <i class="fas fa-book-reader" aria-hidden="true"></i>
                                &nbsp; Articles
                            </a>
                        </li>
                    @endcan

                    @can('contactus-index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contactus.index')}}">
                                <i class="fas fa-book-open" aria-hidden="true"></i>
                                &nbsp; Recived Messagers
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

        {{--  Settings   --}}

            <li class="nav-item">
                <a  class="nav-link" href="#settingMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-tools"></i>
                    &nbsp; Configuration
                </a>

                <ul class="collapse list-unstyled sublist" id="settingMenu">
                    @can('users-index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                &nbsp; Users
                            </a>
                        </li>
                    @endcan
                    
                    @can('role-index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('roles.index')}}">
                                <i class="fab fa-redhat" aria-hidden="true"></i>
                                &nbsp; Role Managment
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link" href="{{route( 'roles.index')}}">
                            <i class="fa fa-users"></i>
                            &nbsp; Roles
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('settings.index')}}">
                            <i class="fab fa-whmcs"></i>
                            &nbsp; Site Settings
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</nav>




