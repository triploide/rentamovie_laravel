<?php

namespace App\Http\Controllers\Practica;

use App\Genre;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class RelacionesController extends Controller
{
    public function index()
    {
        $genre = Genre::find(3);
        $movies = $genre->movies;
        dd($movies->toArray());
    }

    public function queryBuilder()
    {
        $genre = Genre::find(3);
        $movies = $genre->movies()->where('title', 'like', '%vida%')->get();
        dd($movies->toArray());
    }

    public function with()
    {
        //with trae "precargada" una relación
        $genre = Genre::with('movies')->find(3);
        dd($genre->toArray());
    }

    public function associate()
    {
        $genre = Genre::find(3);
        $movie = Movie::find(1);

        echo 'Género actual: '.$movie->genre->name . '<br>';

        //Asignar un género a una película
        $movie->genre()->associate($genre);
        $movie->save();

        echo 'Género modificado: '.$movie->genre->name;

        //Quitar el género a una película
        //$movie->genre()->dissociate();
        //$movie->save();
    }

    public function save()
    {
        $genre = Genre::find(3);
        $movie = Movie::find(1);

        //Agrego una película a un género
        $genre->movies()->save($movie);
    }

    public function saveMany()
    {
        $genre = Genre::find(3);
        $movie = Movie::find(1);

        //Agrego muchas pelicuas a un genero
        $movies = Movie::whereIn('id', [18, 19, 20])->get();
        $genre->movies()->saveMany($movies);
    }

    public function sync()
    {
        //Agrego actores a una película - luego de ejecutar el sync, los actores asociados a la película
        //van a ser sólo aquellos que estoy pasando en el método, es como si se borraran todos los actores
        //que tiene una película y se agregaran sólo los que pasamos en el sync
        $movie = Movie::find(1);
        $movie->actors()->sync([8, 13, 21]);

        //Para desvincular los actores de una película simplemnte puedo hacer un sync con un array vacío
        //$movie->actors()->sync([]);

    }
}
