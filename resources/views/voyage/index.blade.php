<h1>Liste des voyage</h1>
<a href="{{ route('voyage.create') }}">Créer un voyage</a>
@foreach($voyages as $voyage)
    @if($voyage->en_ligne==1)
        <h2>{{ $voyage->titre }}</h2>
        <p>{{ $voyage->description }}</p>
        <p>{{ $voyage->resume }}</p>
        <p>{{ $voyage->continent }}</p>
        <p>{{ $voyage->user_id }}</p>
        @if ($voyage->visuel && file_exists(public_path('storage/' . $voyage->visuel)))
            <img src="{{ asset('storage/' . $voyage->visuel) }}" alt="Visuel" width="100">
        @else
            <img src="{{$voyage->visuel}}" width="210px" height="210px" alt="image_create">
        @endif
        <a href="{{ route('voyage.show', $voyage->id) }}">Voir</a>
        <a href="{{ route('voyage.edit', $voyage->id) }}">Modifier</a>
        <form action="{{ route('voyage.destroy', $voyage->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
        <form action="{{ route('voyage.like', $voyage->id) }}" method="POST">
            @csrf
            <button type="submit">
                @if($voyage->likes()->where('user_id', auth()->id())->exists())
                    Unlike
                @else
                    Like
                @endif
            </button>
        </form>
        <p>{{ $voyage->likes()->count() }} likes</p>
    @endif
@endforeach
