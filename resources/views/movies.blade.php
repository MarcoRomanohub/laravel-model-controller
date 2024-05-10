@extends('layout.main')

@section('content')
    <h1>Movies</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->original_title }}</td>
                    <td>{{ $movie->vote }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
