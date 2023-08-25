@extends('layouts.main')

@section('title', 'Comics')



@section('main')
    <div id="comics">
        {{-- Background --}}
        <div class="background">
            <div class="container container-card">
                <div class="series">CURRENT SERIES</div>
                <div class="content">

                    {{-- Card --}}
                    @foreach ($comics as $comic)
                        <div class="card">
                            <a href="{{ route('comics.show', $comic) }}">
                                <img src="{{ $comic->thumb }}" alt='{{ $comic->series }}'>
                                <h3>{{ $comic->series }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
                <button><a href="{{ route('comics.create') }}">Crea un comic</a></button>
            </div>
        </div>
        {{-- Main Links --}}
        <div class="main-links">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC">
                            <h3>DIGITAL COMICS</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC">
                            <h3>DC MERCHANDISE</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="DC">
                            <h3>SUBSCRIPTION</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="DC">
                            <h3>COMIC SHOP LOCATOR</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC">
                            <h3>DC POWER VISA</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
