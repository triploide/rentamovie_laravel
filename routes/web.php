<?php

Route::get('/', function () {
    return view('welcome');
});

//--------------
//---PRÁCTICA---
//--------------
Route::get('practica', 'Practica\HomeController@index');

//-----------------
//---COLLECTIONS---
//-----------------
Route::get('practica/collections', 'Practica\CollectionController@index');
Route::get('practica/collections/filter', 'Practica\CollectionController@filter');
Route::get('practica/collections/map', 'Practica\CollectionController@map');
Route::get('practica/collections/each', 'Practica\CollectionController@each');
Route::get('practica/collections/keyBy', 'Practica\CollectionController@keyBy');
Route::get('practica/collections/groupBy', 'Practica\CollectionController@groupBy');

//-----------
//---RUTAS---
//-----------
Route::get('practica/rutas/con-un-parametro/{parametro}', 'Practica\RoutesController@unParametro');
Route::get('practica/rutas/con-dos-parametros/{parametro1}/{parametro2}', 'Practica\RoutesController@dosParametros');
Route::get('practica/rutas/parametro-por-defecto/{parametro?}', 'Practica\RoutesController@parametroPorDefecto');
Route::post('practica/rutas/method/post', 'Practica\RoutesController@post');
Route::put('practica/rutas/method/put', 'Practica\RoutesController@put');

//-----------
//---BALDE---
//-----------
Route::get('practica/blade/pasando-parametros-a-la-vista', 'Practica\BladeController@pasarParametros');
Route::get('practica/blade/forelse', 'Practica\BladeController@forelse');
Route::get('practica/blade/herencia', 'Practica\BladeController@herencia');

//----------------
//---RELACIONES---
//----------------
Route::get('practica/relaciones', 'Practica\RelacionesController@index');
Route::get('practica/relaciones/query-builder', 'Practica\RelacionesController@queryBuilder');
Route::get('practica/relaciones/with', 'Practica\RelacionesController@with');
Route::get('practica/relaciones/associate', 'Practica\RelacionesController@associate');
Route::get('practica/relaciones/save', 'Practica\RelacionesController@save');
Route::get('practica/relaciones/saveMany', 'Practica\RelacionesController@saveMany');
Route::get('practica/relaciones/sync', 'Practica\RelacionesController@sync');

//-----------------
//---MISCELÁNEOS---
//-----------------
Route::get('practica/miscelaneos/factory', 'Practica\MiscelaneosController@sync');
Route::get('practica/miscelaneos/api', 'Practica\MiscelaneosController@api');


//----------------------------------------

//-----------
//---FRONT---
//-----------

//peliculas
Route::get('peliculas', 'MovieController@index');
Route::get('pelicula', 'MovieController@show');

//----------------------------------------

//-----------
//---ADMIN---
//-----------

//peliculas
Route::get('admin/peliculas', 'Admin\PeliculasController@index');
Route::get('admin/peliculas/create', 'Admin\PeliculasController@create');
Route::post('admin/peliculas/create', 'Admin\PeliculasController@store');
Route::get('admin/peliculas/{id}', 'Admin\PeliculasController@show');


//-----------

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//----------------------------------------

//-----------
//---REACT---
//-----------

Route::get('react/components/example', 'React\ComponentsController@example');
