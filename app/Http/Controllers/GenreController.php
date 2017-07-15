<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::find($id);
        $movies = Movie::with('genre')->where('genre_id', $id)->paginate(2);
        return view('front.genres.show', compact('movies', 'genre'));
    }
}
