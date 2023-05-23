@extends('layouts.app')
@section('content')
    <div id="movie-info" class="container mt-5">
        <h1 class="text-black text-uppercase mb-3">movie details</h1>
        <div class="d-flex mt-5">
            <div class="container">
                <img src="{{ $movie->image }}" alt="">
            </div>
            <div class="container">
                <h3>Title: <span>{{ $movie->title }}</span></h3>
                <h3>Original title: <span>{{ $movie->original_title }}</span></h3>
                <h3>Nationality: <span>{{ $movie->nationality }}</span></h3>
                <h3>Date: <span>{{ $movie->date }}</span></h3>
                <h3>Rating: <span>{{ $movie->vote }}</span></h3>
            </div>
        </div>

    </div>
@endsection
