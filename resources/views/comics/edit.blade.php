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
        <form action="{{ route('comics.update', $comic) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title', $comic->title) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description', $comic->description) }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                            name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('thumb') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" min="0" value="{{ old('price', $comic->price) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                            name="series" value="{{ old('series', $comic->series) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('series') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                            name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('sale_date') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                            name="type" value="{{ old('type', $comic->type) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                            name="artists" value="{{ old('artist', $comic->artists) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('artists') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                            name="writers" value="{{ old('writers', $comic->writers) }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('writers') }}
                        </div>
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
