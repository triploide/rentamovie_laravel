<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length'];
    
    //protected $guarded = ['id', 'created_at', 'updated_at'];

    public function genre()
    {
    	//parametros:
    	//1: nombre completamente calificado del modelo con el cual me relaciono - OBLIGATORIO
    	//2: nombre del foreing key id_genero genre_id
    	//3: nombre del local key
    	return $this->belongsTo('App\Genre');
    }

    public function actors()
    {
    	return $this->belongsToMany('App\Actor');
    }

    public function scopeWithGenre($query)
    {
        $query->join('genres', 'movies.genre_id', '=', 'genres.id');
    }
}
