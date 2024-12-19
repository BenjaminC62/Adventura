<x-app>
    <div class="profile-user-container">
        <img class="profile-user-banner" src="{{ Vite::asset('resources/images/user-banner.jpg') }}" alt="banner">

        <div class="profile-user-info">
            <img src="{{ $user->avatar }}" alt="Avatar de {{ $user->name }}">
            <h1>Profil de {{ $user->name }}</h1>
        </div>
    </div>

    <div class="profile-voyages-users">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($voyages as $voyage)
                    <div class="swiper-slide">
                        <li>
                            @if ($voyage->visuel && file_exists(public_path('storage/' . $voyage->visuel)))
                                <img src="{{ asset('storage/' . $voyage->visuel) }}" alt="Visuel">
                            @else
                                <img src="{{$voyage->visuel}}" alt="image_create">
                            @endif
                            <span>{{ $voyage->titre }}</span>
                        </li>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <h2 class="profile-like">Voyages aimés</h2>
    <ul>
        @foreach($user->likes as $likedTrip)
            <li>{{ $likedTrip->title }} ({{ $likedTrip->date }})</li>
        @endforeach
    </ul>

    <h2 class="profile-commentaires">Commentaires</h2>
    <ul>
        @foreach($user->avis as $comment)
            <li>{{ $comment->content }} ({{ $comment->created_at }})</li>
        @endforeach
    </ul>

    <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour</a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <style>

        .swiper-container .swiper-pagination {
            position: absolute;
            bottom: -85px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: auto;
            bottom: 102px;
            z-index: 10;
        }

        .swiper-button-prev {
            left: 59px;
        }


        .swiper-button-next {
            right: 59px;
        }
    </style>
</x-app>
