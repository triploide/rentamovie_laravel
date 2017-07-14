<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function pasarParametros()
    {
    	return view('practica.blade.conParametros', ['usuario' => 'Juan']);
    }

    public function forelse()
    {
    	$errores = ['Error 1', 'Error 2'];
    	//return  view('practica.blade.forelse', ['errores' => $errores]); esto es igual a la línea de abajo
    	return  view('practica.blade.forelse', compact('errores'));
    }

    public function herencia()
    {
        return view('practica.blade.index');
    }
}
