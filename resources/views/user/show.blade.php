<x-app>
    <x-voyage-card :user="$user" :voyages="$voyages"/>

    <h2 class="profile-like">Voyages aimés</h2>
    <ul>
        @foreach($user->likes as $likedTrip)
            <li>{{ $likedTrip->title }} ({{ $likedTrip->date }})</li>
        @endforeach
    </ul>

    <h2 class="profile-commentaires">Commentaires</h2>
    <ul>
        @foreach($user->avis as $comment)
            <li>{{ $comment->content }} ({{ $comment->created_at }})</li>
        @endforeach
    </ul>

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour</a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>

</x-app>
