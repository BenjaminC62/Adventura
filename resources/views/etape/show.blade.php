
    <div class="etape">
        <h1>{{ $etape->titre }}</h1>
        <p>{{ $etape->description }}</p>
        @if(!empty($media->url))
            <div class="media">
                <img src="{{ $media->url }}" alt="Media for {{ $etape->titre }}">
            </div>
        @endif
        <p>Début: {{ $etape->debut }}</p>
        <p>Fin: {{ $etape->fin }}</p>
        <a href="{{ route('etape.edit', $etape->id) }}">Modifier</a>
        <form action="{{ route('etape.destroy', $etape->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
        <a href="{{ route('etape.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
