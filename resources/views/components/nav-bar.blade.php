<!-- resources/views/components/nav-bar.blade.php -->
<div class="menu-container">
    <div class="logo-header">
        <img src="{{ Vite::asset('resources/images/Logo-maraton.svg')}}" alt="Logo">
    </div>
    <nav class="menu-header">
        <ul>
            <li class="menu-item"><a href="{{route('accueil')}}" class="link menu-link">Accueil</a></li>
            <li class="menu-item"><a href="{{route('voyage.index')}}" class="link menu-link">Destinations</a></li>
            <li class="menu-item"><a href="{{ Auth::check() ? route('users.show', Auth::user()->id) : route('users.index') }}" class="link menu-link">Profil</a></li>
            <li class="menu-item"><a href="{{route('equipes')}}" class="link menu-link">A propos</a></li>
            <li class="menu-item"><a href="{{route('contact')}}" class="link menu-link">Contact</a></li>
            <li class="menu-item"><a href="{{route('voyage.create')}}" class="link menu-link">Créer un voyage</a></li>
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
        </div>
    @endauth
</div>
