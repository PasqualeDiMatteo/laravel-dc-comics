@extends('layouts.main')

@section('title', 'Comics')

@section('main')
    <h1>{{ $comic->title }}</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
