<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
    	//$movies = Movie::withGenre()->where('movies.id', '>', 36)->get();
    	$movies = Movie::with('genre')->where('id', '>', 36)->get();
        return view('front.movies.index', compact('movies'));
    }

    public function show()
    {
        return view('front.movies.show');
    }
    
}
