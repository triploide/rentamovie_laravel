<?php

namespace App\Http\Controllers\Practica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{

    private $array = [
        ['nombre'=>'fran', 'edad'=>17, 'pais' => 'Argentina'],
        ['nombre'=>'daniel', 'edad'=>44, 'pais' => 'Argentina'],
        ['nombre'=>'nico', 'edad'=>34, 'pais' => 'Brazil']
    ];

    public function index()
    {
    	$collection = collect($this->array);
        dd($collection);
    }

    public function filter()
    {
        $collection = collect($this->array);
        $newCollection = $collection->filter(function ($item){
            return $item['edad'] >= 18;
        });
        dd($newCollection);
    }

    public function map()
    {
        $collection = collect($this->array);
        $newCollection = $collection->map(function ($item){
            $item['nombre'] = ucfirst($item['nombre']);
            return $item;
        });
        dd($newCollection);
    }

    public function each()
    {
        $collection = collect($this->array);
        $newCollection = $collection->each(function ($item){
            echo '<p>'.$item['nombre'].'</p>';
        });
    }

    public function keyBy()
    {
        $collection = collect($this->array);
        $keyByNombre = $collection->keyBy('nombre');
        $keyByPais = $collection->keyBy('pais');
        dd($keyByNombre);
        dd($keyByPais);
    }

    public function groupBy()
    {
        $collection = collect($this->array);
        $groupByPais = $collection->groupBy('pais');
        dd($groupByPais);
    }


}
