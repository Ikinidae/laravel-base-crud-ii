@extends('admin.templates.base')

@section('pageTitle', 'Show page')

@section('pageMain')
    <h1>Comic con id {{ $comic->id }}</h1>

    <table>
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic->toArray() as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('comics.index') }}">Vai a Comics</a>

@endsection
