<?php

namespace App\Http\Controllers\Practica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoutesController extends Controller
{
    public function unParametro($parametro)
    {
        return "Parámetro: $parametro";
    }

    public function dosParametros($parametro1, $parametro2)
    {
        return "Parámetro 1: $parametro1 <br> Parámetro 2: $parametro2";
    }

    public function parametroPorDefecto($parametro='default')
    {
        return "Parámetro: $parametro";
    }

    public function post()
    {
        return 'El request fue envíado por post';
    }

    public function put()
    {
        return 'El request fue envíado por put';
    }
}
