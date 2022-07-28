@extends('admin.templates.base')

@section('pageTitle', 'Admin page')

@section('pageMain')
    <main>

        <h2>Admin di prova</h2>
        <a href="{{ route('comics.create') }}">Vai a Create</a>
        {{-- <a href="{{ route('comics.show') }}">Vai a Show</a> --}}
        <a href="{{ route('home') }}">Vai a home</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>thumb</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale date</th>
                    <th>type</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </main>
@endsection
