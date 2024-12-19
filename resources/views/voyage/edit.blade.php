<x-app>
    <h1>Modification du voyage {{$voyage->titre}}</h1>
    <form action="{{ route('voyage.update', $voyage) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ $voyage->titre }}">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $voyage->description }}">
        <label for="resume">Resume</label>
        <input type="text" name="resume" id="resume" value="{{ $voyage->resume }}">
        <label for="continent">Continent</label>
        <input type="text" name="continent" id="continent" value="{{ $voyage->continent }}">
        <label for="visuel">Visuel</label>
        <input type="file" name="visuel" id="visuel" value="{{ $voyage->visuel }}">
        <button type="submit">Envoyer</button>
    </form>
</x-app>

