<div> <!-- Pour flex s'il faut -->
    <form action="{{ route('avis.store') }}" method="POST">
        @csrf
        <ul>
            <li>
                <label for="contenu">Contenu</label>
                <input type="text" id="contenu" name="contenu" required>
            </li>
        </ul>
        <button type="submit">Envoyer</button>
    </form>
</div>
