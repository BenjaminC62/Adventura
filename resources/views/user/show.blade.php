<!-- resources/views/user/show.blade.php -->


    <h1>Profil de {{ $user->name }}</h1>

    <h2>Voyages réalisés</h2>
    <ul>
        @foreach($user->mesVoyages as $voyage)
            <li>{{ $voyage->title }} ({{ $voyage->date }})</li>
        @endforeach
    </ul>

    <h2>Voyages aimés</h2>
    <ul>
        @foreach($user->likes as $likedTrip)
            <li>{{ $likedTrip->title }} ({{ $likedTrip->date }})</li>
        @endforeach
    </ul>

    <h2>Commentaires</h2>
    <ul>
        @foreach($user->avis as $comment)
            <li>{{ $comment->content }} ({{ $comment->created_at }})</li>
        @endforeach
    </ul>
    <h2>Avatar</h2>
    <img src="{{ $user->avatar }}" alt="Avatar de {{ $user->name }}" style="width: 150px; height: 150px; border-radius: 50%">

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour</a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
