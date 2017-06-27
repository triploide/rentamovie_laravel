<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    

    public function buscarPeliculaId($id)
    {
    	$peliculas = [
	    	1 => 'Lorem',
	    	2 => 'Ipsum',
	    	3 => 'Dolor'
	    ];
	    $resultado = (isset($peliculas[$id]))?$peliculas[$id]:'No se encontraro resultado';
    	return view('pelicula', ['resultado' => $resultado]);
    }

    public function mostrarForm()
    {
    	return view('agregarPelicula');
    }

    public function agregarPelicula()
    {
        //dd(Movie::first()->title);
    	$this->validate(request(), [
            //'title' => 'required|min:3|unique:movies',
            //'rating' => 'email',
            //'publicacion' => 'date'
        ]);

        //create
        /*
        $datos = request()->only('title','rating','awards','length','release_date');
        $movie = Movie::create($datos);
        */

        /*
        $movie = new Movie;
        $movie->title = request('title');
        $movie->rating = request('rating');
        $movie->release_date = request('release_date');
        $movie->save();
        */

        /*
        $movie = Movie::orderBy('id', 'desc')->first();
        $movie->title = 'Nuevo titulo nuevo';
        $movie->save();
        */

        $movie = Movie::orderBy('id', 'desc')->first();
        $movie->delete();
    }
}
