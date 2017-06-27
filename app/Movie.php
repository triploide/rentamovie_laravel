<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //protected $fillable = ['title', 'rating'];
    
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
