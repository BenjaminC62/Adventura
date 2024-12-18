<!-- resources/views/user/index.blade.php -->

<h2>Liste des users</h2>
<ul>
    @foreach($users as $user)
        <li>
            <img src="{{ $user->avatar }}" alt="Avatar de {{ $user->name }}" style="width: 50px; height: 50px; border-radius: 50%;">
            {{ $user->name }}
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Voir</a>
        </li>
    @endforeach
</ul>
