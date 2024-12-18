<a href="{{ route('etape.create') }}" class="btn btn-primary">Créer une étape</a>

@foreach($etapes as $etape)
    <div class="step-card">
        <h3>{{ $etape->titre }}</h3>
        <p>{{ $etape->resume }}</p>
        <a href="{{ route('etape.show', $etape->id) }}">Voir plus</a>
    </div>
@endforeach
