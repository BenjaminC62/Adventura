
    <form method="POST" action="{{ route('etape.update', $etape->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre de l'étape</label>
            <input type="text" id="titre" name="titre" value="{{ $etape->titre }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required>{{ $etape->description }}</textarea>
        </div>
        <div>
            <label for="media_url">URL du média</label>
            <input type="url" id="media_url" name="media_url" value="{{ $etape->media_url }}" required>
        </div>
        <button type="submit">Mettre à jour l'étape</button>
    </form>
