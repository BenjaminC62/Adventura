<!-- resources/views/equipes.blade.php -->

<div class="team-info">
    <h1>Notre Équipe</h1>
    <ul>
        @foreach($teamMembers as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
</div>
