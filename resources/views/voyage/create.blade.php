<x-nav-bar></x-nav-bar>
<h1>Creation d'un voyage</h1>
<form action="{{ route('voyage.store') }}" method="POST" enctype="multipart/form-data">
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
    <input type="file" name="visuel" id="visuel">
    <label for="publier">Publier</label>
    <input type="checkbox" name="publier" id="publier">
    <button type="submit">Envoyer</button>
</form>
