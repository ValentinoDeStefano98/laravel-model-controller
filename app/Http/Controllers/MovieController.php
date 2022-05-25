<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        dd($movies);
        return view('pages.movie.index', compact('movies'));
    }
}
