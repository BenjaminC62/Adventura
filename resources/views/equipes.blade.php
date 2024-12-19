<!-- resources/views/equipes.blade.php -->
<x-app>
    <div class="team-info">
        <h1>Notre Équipe</h1>
        @foreach($teamMembers as $member)
            <div class="team-member">
                <h2>{{ $member }}</h2>
            </div>
        @endforeach
    </div>
</x-app>
