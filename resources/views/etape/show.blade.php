<!-- resources/views/etape/show.blade.php -->
<x-app>
    <div class="etape-container">
        <h1>{{ $etape->titre }}</h1>
        <p>{{ $etape->description }}</p>
        @if(!empty($media->url))
            <div class="media">
                <img src="{{ $media->url }}" alt="Media for {{ $etape->titre }}">
            </div>
        @endif
        <p>Début: {{ $etape->debut }}</p>
        <p>Fin: {{ $etape->fin }}</p>
        <div class="actions">
            <a href="{{ route('etape.edit', $etape->id) }}" class="btn">Modifier</a>
            <form action="{{ route('etape.destroy', $etape->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Supprimer</button>
            </form>
            <a href="{{ route('voyage.show', $etape->voyage_id) }}" class="btn">Retour à la liste</a>
        </div>
    </div>
</x-app>
