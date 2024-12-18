<h1>Modification du voyage {{$voyage->titre}}</h1>
<form action="{{ route('voyage.update', $voyage) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre">
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <label for="resume">Resume</label>
    <input type="text" name="resume" id="resume">
    <label for="continent">Continent</label>
    <input type="text" name="continent" id="continent">
    <label for="visuel">Visuel</label>
    <input type="text" name="visuel" id="visuel">
    <button type="submit">Envoyer</button>
</form>

