@extends('layouts.app')
@section('content')
    <div id="allmovie" class="container">
        <h1 class="text-black">All Movies</h1>
        <div class="container mt-5">
            <ul class="d-flex flex-wrap gap-3">
                @foreach ($movies as $movie )
                    <li >
                        <a href="" >
                            <img src="{{$movie->image}}" alt="">
                        </a>
                        <div>
                            <p>{{$movie->title}}</p>
                        </div>

                    </li>

                @endforeach
            </ul>
        </div>
    </div>
@endsection
