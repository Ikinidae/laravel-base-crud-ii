@extends('admin.templates.base')

@section('pageTitle', 'Create page')

@section('pageMain')

    <h1 class="text-align-center">Modifica Comic</h1>

    <form action="{{ route('comics.update', ['comic' => $comic])}}" method="post">
        @method('put')
        @csrf
        <div class="mb-1">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description" value="{{ $comic->description }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="thumb">Img Cover link</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="number" name="price" id="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="series">Series</label>
            <input class="form-control" type="text" name="series" id="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="sale_date">Sale Date</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-1">
            <label class="form-label" for="type">Type</label>
            <input class="form-control" type="text" name="type" id="type" value="{{ $comic->type }}">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('comics.index') }}" class="align-self-center">Vai a Comics</a>
@endsection
