<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    public function checkout()
    {
        return view('front.cart.checkout');
    }

    public function add()
    {
        $id = request('movie_id');
        if (!session()->has('cart') || !in_array($id, session('cart'))) {
            session()->push('cart',  $id);
        }
        var_dump(session('cart'));
    }

}
