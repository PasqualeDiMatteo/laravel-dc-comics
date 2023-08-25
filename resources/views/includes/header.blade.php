<header>
    {{-- Container --}}
    <div class="container">
        <div class="nav-bar">
            {{-- LOGO --}}
            <figure>
                <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>
            </figure>
            {{-- NAV BAR --}}
            <nav>
                <ul>
                    {{-- Navbar links --}}
                    <li><a href="#"@if (Route::is('characters')) class="active" @endif>CHARACTERS</a></li>
                    <li><a
                            href="{{ route('comics.index') }}"@if (Route::is('comics*')) class="active" @endif>COMICS</a>
                    </li>
                    <li><a href="#"@if (Route::is('movies')) class="active" @endif>MOVIES</a></li>
                    <li><a href="#"@if (Route::is('tv')) class="active" @endif>TV</a></li>
                    <li><a href="#"@if (Route::is('games')) class="active" @endif>GAMES</a></li>
                    <li><a href="#"@if (Route::is('collectibles')) class="active" @endif>COLLECTIBLES</a></li>
                    <li><a href="#"@if (Route::is('videos')) class="active" @endif>VIDEOS</a></li>
                    <li><a href="#"@if (Route::is('fans')) class="active" @endif>FANS</a></li>
                    <li><a href="#"@if (Route::is('news')) class="active" @endif>NEWS</a></li>
                    <li><a href="#"@if (Route::is('shop')) class="active" @endif>SHOP</a>
                    </li>
                    <li class="search">
                        <div class="search-bar"><input type="text" placeholder="Search"></div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
