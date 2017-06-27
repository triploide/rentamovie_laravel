<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Pelicula;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function peliculas()
    {
    	//$peliculas = Pelicula::where('titulo', 'Toy Story')->first();
    	//dd($peliculas->titulo);
    	$peliculas = Pelicula::all();
    	//dd($peliculas);
    	return view("peliculas",["resultado"=> $peliculas]);
    }

    public function actores()
    {
    	$actores = Actor::all();
    	return view("actores", compact('actores'));
    }
}
