@extends('layouts.main')

@section('title', 'Comics')

@section('main')
    <h1>Comics</h1>
    <div class="container">
        <div class="row row-cols-6">
            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <div class="h-100">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="..." class="img-fluid w-100">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Info</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Non ci sono Comics</h2>
            @endforelse
        </div>
    </div>
@endsection
