<!-- resources/views/user/show.blade.php -->

<h1>Profil de {{ $user->name }}</h1>

<h2>Voyages réalisés</h2>
<ul>
    @foreach($user->mesVoyages as $voyage)
        <li>{{ $voyage->title }} ({{ $voyage->date }})</li>
    @endforeach
</ul>
<h2>Voyages aimés</h2>
<ul>
    @foreach($user->likes as $likedTrip)
        <li>{{ $likedTrip->title }} ({{ $likedTrip->date }})</li>
    @endforeach
</ul>

<h2>Commentaires</h2>
<ul>
    @foreach($user->avis as $comment)
        <li>{{ $comment->content }} ({{ $comment->created_at }})</li>
    @endforeach
</ul>
<h2></h2>

