<?php

use App\Actor;
use App\Genre;
use App\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //return '<h1>hola</h1><p>mundo</p>';
});

Route::get('collections', function () {
    $array = [
    	['nombre'=>'Fran', 'edad'=>17],
    	['nombre'=>'Daniel', 'edad'=>44],
    	['nombre'=>'Nico', 'edad'=>34]
    ];
    $collection = collect($array);
    $newCollection = $collection->filter(function ($item){
    	return $item['edad'] >= 18;
    });
    dd($newCollection);
});

/*
Route::get('peliculas/{pagina}', function ($pagina) {
    //return view('welcome');
    return '<h1>hola</h1><p>Película '.$pagina.'</p>';
});
*/

/*
Route::get('peliculas/{pagina?}', function ($pagina=1) {
    //return view('welcome');
    return '<h1>hola</h1><p>Película '.$pagina.'</p>';
});


Route::get('peliculas/{pagina?}', 'TestController@peliculas');
*/
/*
Route::get('practica/blade/ejemplo-1', 'Practica\BladeController@ejemplo');
Route::get('ejemplo/blade', 'EjemploController@blade');
Route::get('ejemplo/extension', 'EjemploController@extension');


Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('agregar-pelicula', 'PeliculasController@mostrarForm');
Route::post('agregar-pelicula', 'PeliculasController@agregarPelicula');

Route::get('ejemplo/eloquent/peliculas', 'EloquentController@peliculas');
Route::get('ejemplo/eloquent/actores', 'EloquentController@actores');

Route::get('practica/RequestController', 'Practica\RequestController@guardar');

Route::get('practica/colecciones', 'Practica\CollecionesController@test');
*/
//-------

Route::get('actors', 'ActorsController@index');
Route::get('actors/{id}', 'ActorsController@show');

Route::get('actors/create', 'ActorsController@create');
Route::post('actors/create', 'ActorsController@store');
Route::get('actors/{id}/update', 'ActorsController@edit');
Route::put('actors/{id}/update', 'ActorsController@update');
Route::delete('actors/{id}', 'ActorsController@destroy');


Route::get('practica/eloquent/relaciones', function () {
	
	$genre = Genre::find(5);
	echo '<p>'. $genre->name .'</p>';
	$movies = $genre->movies()->where('title', 'like', 'La%')->get();
	foreach($movies as $movie) {
		$actores = $movie->actors()->pluck('first_name')->implode(', ');
		echo $movie->title . ' : '.$actores. '<br>';
	}
	echo "<hr>";

});

Route::get('practica/eloquent/relaciones2', function () {

	$genre = Genre::find(3);
	$movie = Movie::find(25);

	/*
	Asignar un genero a una pelicula
	$movie->genre()->associate($genre);
	//$movie->genre()->dissociate();
	$movie->save();
	*/
	//$amigo = Amigo::create([]);
	//$user->amigos()->save($amigo);

	//agrego una pelicula a un genero
	//$genre->movies()->save($movie);

	//Agrego muchas pelicuas a un genero
	//$movies = Movie::whereIn('id', [22, 23, 24])->get();
	//$genre->movies()->saveMany($movies);

	//tablas de n a n
	$movie->actors()->sync([]);

	echo "¡Bien!";

	//ESTO ESTA MAL
	//$movie = Movie::where('id', 1)->limit(1)->get();
	//$movie->title;
});

//----------------------------------------

Route::get('admin/peliculas', 'Admin\PeliculasController@index');
Route::get('admin/peliculas/create', 'Admin\PeliculasController@create');
Route::post('admin/peliculas/create', 'Admin\PeliculasController@store');
Route::get('admin/peliculas/{id}', 'Admin\PeliculasController@show');


//-----------

Route::get('factory', function () {
	factory(App\Movie::class, 5)->create()->each(function ($m) {
		$actors = factory(App\Actor::class, 3)->make();
		$m->actors()->saveMany($actors);
	});
	$movie = Movie::find(36);
	dd($movie->actors->toArray());
	//return 'Bien';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
