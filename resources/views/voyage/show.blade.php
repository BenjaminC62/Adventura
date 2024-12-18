<h1>Détail du voyage : {{ $voyage->titre }}</h1>

<h2>{{ $voyage->description }}</h2>
<p>{{ $voyage->resume }}</p>
<p>{{ $voyage->continent }}</p>
<p>{{ $voyage->user_id }}</p>
@if ($voyage->visuel && file_exists(public_path('storage/' . $voyage->visuel)))
    <img src="{{ asset('storage/' . $voyage->visuel) }}" alt="Visuel" width="100">
@else
    <img src="{{$voyage->visuel}}" width="210px" height="210px" alt="image_create">
@endif

<a href="{{ route('etape.create', ['voyage_id' => $voyage->id]) }}">Créer une étape</a>

@if($etapes->count() > 0)
    <h2>Les étapes de ce voyage</h2>
    @foreach($etapes as $etape)
        <div>
            <h3>{{ $etape->titre }}</h3>
            <p>{{ $etape->resume }}</p>
            <a href="{{ route('etape.show', $etape->id) }}">Voir plus</a>
        </div>
    @endforeach
@else
    <p>Aucune étape pour ce voyage</p>
@endif

<a href="{{ route('voyage.edit', $voyage->id) }}">Modifier</a>
<form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
<a href="{{ route('voyage.index') }}">Retour</a>
