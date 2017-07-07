<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class ApiController extends Controller
{
    public function index()
    {
    	return view('practica.api.index');
    }

    public function curl()
    {
    	// api/movie - GET
    	$response = Curl::to('/api/movies')
        	->withData( array( 'api_token' => '4x6RHIsWdtCitN8ESctIurC99wQHfn8i3MZRTIfYxrOcYc4mryYgSRpz1mUz' ) )
        	->get();
        return $response;
    }
}
