@extends('layouts.main')

@section('title', $comic['series'])

@section('main')
    {{-- Comic --}}
    <div id="comic">
        <div class="bg-blue">
            {{-- Container --}}
            <div class="container">
                {{-- Card Comic --}}
                <div class="card-comic">
                    <img src="{{ $comic->thumb }}" alt='{{ $comic->series }}'>
                </div>
            </div>
        </div>
        <div class="container">
            {{-- Row --}}
            <div class="row">
                {{-- Card Left --}}
                <div class="card-left">
                    {{-- Title --}}
                    <h2>{{ $comic->title }}</h2>
                    {{-- Availability --}}
                    <div class="availability">
                        <div class="availability-left">
                            {{-- Price --}}
                            <div class="price"> U.S. Price: <span>{{ $comic->price }}</span></div>
                            {{-- Status --}}
                            <div class="status">AVAILABLE</div>
                        </div>
                        {{-- Check --}}
                        <div class="availability-right">Check Availability</div>
                    </div>
                    {{-- Desciption --}}
                    <p class="description">{{ $comic->description }}</p>
                    <div class="btn-container">
                        <a href="{{ route('comics.edit', $comic) }}" class="btn bg-orange">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic) }}" method="post" class="delete-form"
                            data-name="{{ $comic->title }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-red">Elimina</button>
                        </form>
                    </div>
                </div>
                {{-- Card Right --}}
                <div class="card-right">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="ADV">
                </div>
            </div>
        </div>
        {{-- Info Comic --}}
        <div class="info-comic">
            <div class="container">
                <div class="row">
                    {{-- Talent --}}
                    <div class="col">
                        <h4>Talent</h4>
                        <div class="row-info">
                            {{-- Art --}}
                            <div class="col-left">Art by:</div>
                            <div class="col-right">
                                {{ $comic->artists }},
                            </div>
                        </div>
                        {{-- Written --}}
                        <div class="row-info">
                            <div class="col-left">Written by:</div>
                            <div class="col-right">
                                {{ $comic->writers }},
                            </div>
                        </div>
                    </div>
                    {{-- Specs --}}
                    <div class="col">
                        <h4>SPECS</h4>
                        {{-- Series --}}
                        <div class="row-info">
                            <div class="col-left">Series:</div>
                            <div class="col-right">
                                {{ $comic->series }}
                            </div>
                        </div>
                        {{-- Price --}}
                        <div class="row-info">
                            <div class="col-left">U.S. Price:</div>
                            <div class="col-right color-black">
                                {{ $comic->price }}
                            </div>
                        </div>
                        {{-- On Sale Date --}}
                        <div class="row-info">
                            <div class="col-left">On Sale Date:</div>
                            <div class="col-right color-black">
                                {{ $comic->sale_date }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Links --}}
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h6>DIGITAL COMICS</h6>
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC">
                        </div>
                        <div class="col">
                            <h6>SHOP DC</h6>
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="DC">
                        </div>
                        <div class="col">
                            <h6>COMIC SHOP LOCATOR</h6>
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="DC">
                        </div>
                        <div class="col">
                            <h6>SUBSCRIPTIONS</h6>
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    @vite('resources/js/delete-confirm.js')

@endsection
