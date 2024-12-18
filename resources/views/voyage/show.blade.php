<h1>Détail du voyage : {{ $voyage->titre }}</h1>

<h2>{{ $voyage->description }}</h2>
<p>{{ $voyage->resume }}</p>
<p>{{ $voyage->continent }}</p>
<p>{{ $voyage->user_id }}</p>
<p>{{ $voyage->visuel }}</p>

<a href="{{ route('voyage.edit', $voyage->id) }}">Modifier</a>
<form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
<a href="{{ route('voyage.index') }}">Retour</a>

<h2>Avis</h2>
@foreach($voyage->avis as $avis)
    <p>{{ $avis->contenu }}</p>
    <a href="{{ route('avis.edit', $avis->id) }}">Modifier</a>
    <form action="{{ route('avis.destroy', $avis->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endforeach
<a href="{{ route('avis.create', ['voyage' => $voyage->id, 'user' => $user->id]) }}" class="btn btn-primary">Ajouter un avis</a>
