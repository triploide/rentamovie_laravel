<?php

namespace App\Http\Controllers\Practica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MiscelaneosController extends Controller
{
    public function factory()
    {
        Route::get('factory', function () {
            factory(App\Movie::class, 5)->create()->each(function ($movie) {
                $actors = factory(App\Actor::class, 3)->make();
                $movie->actors()->saveMany($actors);
            });
        });
    }

    public function api()
    {
        return view('practica.api.index');
    }
}
