@extends('admin.templates.base')

@section('pageTitle', 'Create page')

@section('pageMain')

    <h1>Insert new Comic</h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error('title')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
            @error('description')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="thumb">Img Cover link</label>
            <input type="text" name="thumb" id="thumb">
            @error('thumb')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
            @error('price')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
            @error('series')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="sale_date">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date">
            @error('sale_date')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
            @error('type')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button>Save</button>
    </form>
    <a href="{{ route('comics.index') }}">Vai a Comics</a>

@endsection
