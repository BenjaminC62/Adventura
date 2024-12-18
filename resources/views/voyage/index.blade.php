<h1>Liste des voyage</h1>
@foreach($voyages as $voyage)
    @if($voyage->en_ligne==1)
        <h2>{{ $voyage->titre }}</h2>
        <p>{{ $voyage->description }}</p>
        <p>{{ $voyage->resume }}</p>
        <p>{{ $voyage->continent }}</p>
        <p>{{ $voyage->user_id }}</p>
        <p>{{ $voyage->visuel }}</p>
    @endif
@endforeach

<h2>Avis</h2>
@foreach($voyage->avis as $avis)
    <p>{{ $avis->contenu }}</p>
@endforeach
