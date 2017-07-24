<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['movie_id', 'price'];

    public function purchase()
    {
        return $this->belongsTo('App\Purchase');
    }
}
