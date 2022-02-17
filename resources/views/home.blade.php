@extends('layouts.base')

@section('content')
    <main class="movie-main">
        <div class="movie-container">
            <div class="row row-cols-3">
                @foreach ($movies as $movie)
                    <div class="col p-3">

                        <div class="d-flex flex-column p-2">
                            <h2 class="text-center movie-title">{{ $movie->title }}</h2>
                            <ul class="list-group">
                                <li class="list-group-item">Id: {{ $movie->id }}</li>
                                <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                                <li class="list-group-item">Language: {{ $movie->nationality }}</li>
                                <li class="list-group-item">Date: {{ $movie->date }}</li>
                                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
