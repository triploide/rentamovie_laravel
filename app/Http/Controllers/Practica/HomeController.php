<?php

namespace App\Http\Controllers\Practica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('practica.index');
    }
}
