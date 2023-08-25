@extends('layouts.main')

@section('title', 'Create')

@section('main')
    <h1>Crea un nuovo fumetto</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control" id="thumb" name="thumb" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" min="0" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control" id="artists" name="artists" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers" name="writers" required>
                    </div>
                </div>
                <div class="col-12 text-end">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Aggiungi</button>
                </div>
            </div>
        </form>
    </div>
@endsection
