<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

	protected $table = 'actor';

	public $timestamps = false;

    public function getNombreCompleto()
    {
    	return $this->nombre . ' ' .$this->apellido;
    }
}
