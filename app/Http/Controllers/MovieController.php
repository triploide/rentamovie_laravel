<?php

namespace App\Http\Controllers;

use App\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function __construct()
    {
        setlocale(LC_TIME, 'es_ES');
    }

    public function index()
    {
        $movies = Movie::with('genre')->paginate(5);
        return view('front.movies.index', compact('movies'));
    }

    public function show($slug)
    {
        $movie = Movie::where('slug', $slug)->first();
        return view('front.movies.show', compact('movie'));
    }
    
}
