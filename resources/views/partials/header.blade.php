<header>
    <nav class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="foto">
        </div>
        <div>
            <ul class="">
                <li><a href="{{ route('comics.index') }}">CHARACTERS-Index</a></li>
                <li><a href="{{ route('comics.create') }}">COMICS-Create</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
            </ul>
        </div>
    </nav>
    <div class="banner"></div>
</header>