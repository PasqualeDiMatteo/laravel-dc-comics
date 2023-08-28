@extends('layouts.main')

@section('title', 'Edit')

@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css'
        integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=='
        crossorigin='anonymous' />
@endsection

@section('main')
    <h1 class="text-center my-4">Modifica un fumetto</h1>
    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"
                            required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                            required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" min="0"
                            value="{{ $comic->price }}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                            required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control" id="artists" name="artists"
                            value="{{ $comic->artists }}" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers" name="writers"
                            value="{{ $comic->writers }}" required>
                    </div>
                </div>
                <div class="col-12 text-end">
                    <div class="mb-3">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-warning">Modifica</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
