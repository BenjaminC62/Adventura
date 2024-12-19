<x-app>
    <div class="voyage-detail">
        <h1>Détail du voyage : {{ $voyage->titre }}</h1>
        <h2>{{ $voyage->description }}</h2>
        <p>{{ $voyage->resume }}</p>
        <p>{{ $voyage->continent }}</p>
        <p>{{ $voyage->user_id }}</p>
        @if ($voyage->visuel && file_exists(public_path('storage/' . $voyage->visuel)))
            <img src="{{ asset('storage/' . $voyage->visuel) }}" alt="Visuel">
        @else
            <img src="{{$voyage->visuel}}" alt="image_create">
        @endif
        <br>
        <div class="actions">
            <a href="{{ route('etape.create', ['voyage_id' => $voyage->id]) }}">Créer une étape</a>
            <a href="{{ route('voyage.index') }}">Retour</a>
        </div>

        @if($etapes->count() > 0)
            <h2>Les étapes de ce voyage</h2>
            <div class="timeline">
                @foreach($etapes as $etape)
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3>{{ $etape->titre }}</h3>
                            <p>{{ $etape->resume }}</p>
                            <p>{{ $etape->debut->format('d/m/Y') }} - {{ $etape->fin->format('d/m/Y') }}</p>
                            <a href="{{ route('etape.show', $etape->id) }}">Voir plus</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Aucune étape pour ce voyage</p>
        @endif

        <h2>Avis</h2>
        @foreach($voyage->avis as $avis)
            <div class="avis">
                <p>{{ $avis->contenu }}</p>
                <a href="{{ route('avis.edit', $avis->id) }}" class="btn-voyage">Modifier</a>
                <form action="{{ route('avis.destroy', ['voyage' => $voyage->id, 'avis' => $avis->id]) }}" method="POST" style="margin-top: 10px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-voyage">Supprimer</button>
                </form>
            </div>
        @endforeach
        <a href="{{ route('avis.create', ['voyage' => $voyage->id, 'user' => $user->id]) }}" class="btn-voyage">Ajouter un avis</a>
    </div>
</x-app>
