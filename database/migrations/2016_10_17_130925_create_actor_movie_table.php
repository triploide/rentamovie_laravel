<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE actor_pelicula (
         *     id 					INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     id_actor            INT UNSIGNED NOT NULL,
         *     id_pelicula         INT UNSIGNED NOT NULL,
         *     FOREIGN KEY (id_actor) REFERENCES actor(id),
         *     FOREIGN KEY (id_pelicula) REFERENCES pelicula(id)
         * );
         */
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->mediumInteger('actor_id')->unsigned();
            $table->smallInteger('movie_id')->unsigned();
            $table->primary(['actor_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_movie');
    }
}
