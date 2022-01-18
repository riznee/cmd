<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            {{-- {{ config('app.name') }} --}}
            <img src="{{ asset('enol/img/logo.png') }}" width="200%" height="200%">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                @foreach ($pages as $page)


                    @if ($page->slug == 'contactus')
                        <a class="navbar-item" href="{{ route('contactus.form') }}">
                            {{ $page->title }}
                        </a>
                    @elseif($page->slug =='home')
                         {{-- <a class="navbar-item" href="{{ route('home') }}"> 
                             {{ $page->title }} 
                         </a>  --}}
                    @else
                        <a class="navbar-item" href="{{ route('page', $page->slug) }}">
                            {{ $page->title }}
                        </a>
                    @endif

                @endforeach
            </div>
        </div>



        @guest
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="{{ route('signup') }}">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="{{ route('login') }}">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        @endguest

        @auth
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            {{ $user->name }}
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('dashboard') }}"> Dashboard</a>
                            <a class="navbar-item" href="{{ route('logout') }}"> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        @endauth

    </div>
</nav>
