<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeliculasController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('maxi');
    }

    public function index()
    {
    	$movies = Movie::paginate(10);
    	return view('admin.peliculas.index', compact('movies'));
    }

    public function create()
    {
    	return view('admin.peliculas.create');
    }

    public function store()
    {
    	//crear la peli
    	$movie = Movie::create(request()->all());

    	//guardar la imagen
    	$nombre = str_slug($movie->title) . '.' .request()->banner->extension();
    	request()->banner->storeAs('peliculas', $nombre);

    	//asociar la imagen con la peli
    	$movie->banner = $nombre;
    	$movie->save();
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('admin.peliculas.show', compact('movie'));
    }
}
