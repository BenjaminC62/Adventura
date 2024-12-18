<div>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('voyage.index')}}">Destination</a>

    <a href="#">Profil</a>
    <a href="#">A propos</a>
    <a href="#">Contact</a>

    @auth
        {{Auth::user()->name}}
        <a href="{{route("logout")}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form>
    @else
        <a href="{{route("login")}}">Connexion</a>
    @endauth
</div>
