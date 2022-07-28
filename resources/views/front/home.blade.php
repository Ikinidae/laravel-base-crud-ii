@extends('front.templates.base')

@section('pageTitle', 'Home')

@section('pageMain')
    <main>

        <h2>Home</h2>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contacts') }}">Contacts</a>
        <a href="{{ route('comics.index') }}">Comics List</a>

    </main>
@endsection
