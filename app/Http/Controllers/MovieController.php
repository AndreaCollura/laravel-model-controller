<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        /* dd($movies); */

        return view('movies.index' , compact('movies'));
    }


    public function trending()
    {
        $topmovies = Movie::where('vote', '>=', 9)->get();


        return view('home', compact('topmovies'));

    }

}
