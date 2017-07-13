<?php

namespace App\Http\Controllers\React;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentsController extends Controller
{
    public function example()
    {
        return view('react.example');
    }
}
