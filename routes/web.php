<?php

use App\Actor;

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

Route::get('practica/blade/ejemplo-1', 'Practica\BladeController@ejemplo');
Route::get('ejemplo/blade', 'EjemploController@blade');
Route::get('ejemplo/extension', 'EjemploController@extension');

Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('agregar-pelicula', 'PeliculasController@mostrarForm');
Route::post('agregar-pelicula', 'PeliculasController@agregarPelicula');

Route::get('ejemplo/eloquent/peliculas', 'EloquentController@peliculas');
Route::get('ejemplo/eloquent/actores', 'EloquentController@actores');

Route::get('practica/RequestController', 'Practica\RequestController@guardar');

//-------
Route::get('actor', 'ActorsController@index');
Route::get('actor/{id}', 'ActorsController@show');
Route::get('actor/create', 'ActorsController@create');
Route::post('actor/create', 'ActorsController@store');
Route::get('actor/{id}/update', 'ActorsController@edit');
Route::put('actor/{id}/update', 'ActorsController@update');

