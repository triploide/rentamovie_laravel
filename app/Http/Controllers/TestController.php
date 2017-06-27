<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function peliculas($pagina=1)
    {
    	return '<h1>hola</h1><p>Película '.$pagina.'</p>';
    }
}
