
    <form method="POST" action="{{ route('etape.store', ['voyage_id' => $voyage->id]) }}">
        @csrf
        <div>
            <label for="titre">Titre de l'étape</label>
            <input type="text" id="titre" name="titre" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="resume">Resume</label>
            <textarea id="resume" name="resume" required></textarea>
        </div>
        <div>
            <label for="media_url">URL du média</label>
            <input type="url" id="media_url" name="media_url">
        </div>
        <div>
            <label for="debut">Début</label>
            <input type="datetime-local" id="debut" name="debut" required>
        </div>
        <div>
            <label for="fin">Fin</label>
            <input type="datetime-local" id="fin" name="fin" required>
        </div>

        <button type="submit">Ajouter l'étape</button>
    </form>
