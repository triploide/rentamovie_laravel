<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
	public function index()
	{
		//return request()->user()->movies();
		$movies = Movie::limit(10)->get();
		return $movies->toArray();
	}
}
