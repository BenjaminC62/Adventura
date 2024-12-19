<div class="menu-container">
    <div class="logo-header">
        <img src="{{ asset('images/Logo-maraton.svg') }}" alt="Logo">
    </div>
    <nav class="menu-header">
        <ul>
            <li class="menu-item"><a href="{{route('accueil')}}" class="link menu-link">accueil</a></li>
            <li class="menu-item"><a href="{{route('voyage.index')}}" class="link menu-link">destinations</a></li>
            <li class="menu-item"><a href="{{ Auth::check() ? route('users.show', Auth::user()->id) : route('users.index') }}" class="link menu-link">profil</a></li>
            <li class="menu-item"><a href="{{route('equipes')}}" class="link menu-link">à propos</a></li>
            <li class="menu-item"><a href="{{route('contact')}}" class="link menu-link">contact</a></li>
        </ul>
    </nav>
    @auth
        {{Auth::user()->name}}
        <div class="btn-header">
            <a class="btn btn-stroke-brown" href="{{route("logout")}}"
               onclick="document.getElementById('logout').submit(); return false;">Logout</a>
            <form id="logout" action="{{route("logout")}}" method="post">
                @csrf
            </form>
        </div>
    @else
        <div class="btn-header">
            @if(Route::currentRouteName() != 'login')
                <a href="{{route("login")}}" class="btn btn-stroke-brown">Connexion</a>
            @endif
            @if(Route::currentRouteName() != 'register')
                <a href="{{route("register")}}" class="btn btn-stroke-brown">Inscription</a>
            @endif
        </div>
    @endauth
</div>
