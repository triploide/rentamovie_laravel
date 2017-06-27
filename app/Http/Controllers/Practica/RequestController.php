<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function guardar()
    {
        //dd(request()->all());
        //dd(request()->input('nombre'));
        //dd(request()->only('nombre', 'apellido'));
        dd(request()->except('_token'));
        //TO DO: save
    }

    /*
    public function guardar(Request $request)
    {
        dd($request->all());
    	//TO DO: save
    }
    */

}
