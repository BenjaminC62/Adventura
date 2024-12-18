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
<a href="{{ route('voyage.edit', $voyage->id) }}">Modifier</a>
<form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
<a href="{{ route('voyage.index') }}">Retour</a>
