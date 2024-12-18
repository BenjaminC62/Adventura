<!-- resources/views/user/index.blade.php -->

<h2>Liste des users</h2>
<ul>
    @foreach($users as $user)
        <li>
            {{ $user->name }}
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Voir</a>
        </li>
    @endforeach
</ul>
