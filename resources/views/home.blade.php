@extends('layouts.app')
@section('content')
    <div id="topmovie" class="container mt-5">
        <h1 class="text-black text-uppercase">trending movies</h1>
        <div class="container mt-5">
            <ul class="d-flex flex-wrap gap-3">
                @foreach ($topmovies as $topmovie)
                    <li>
                        <a href="{{ route('movies.show', ['id' => $topmovie->id])}}">
                            <img src="{{ $topmovie->image }}" alt="">
                        </a>
                        <div class="text-box">
                            <p >{{ $topmovie->title }}</p>
                            <p >Rating: {{$topmovie->vote}}</p>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
