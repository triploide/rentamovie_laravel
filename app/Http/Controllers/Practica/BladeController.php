<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function ejemplo()
    {
    	return view('practica.blade.ejemplo', ['usuario' => 'Juan']);
    }

    public function blade()
    {
    	$errores = ['Error 1', 'Error 2'];
    	//return  view('templates', ['errores' => $errores]);
    	return  view('practica.blade.templates', compact('errores'));
    }

    public function extension()
    {
        return view('practica.blade.index');
    }
}
