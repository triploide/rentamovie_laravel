<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE pelicula (
         *     id      			    INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo  			    VARCHAR(500) NOT NULL,
         *     rating  			    DECIMAL(3,1) UNSIGNED NOT NULL,
         *     premios 			    INT UNSIGNED DEFAULT 0 NOT NULL,
         *     fecha_de_estreno 	DATE NOT NULL,
         *     duracion 			INT UNSIGNED NULL,
         *     id_genero            INT UNSIGNED NULL,
         *     FOREIGN KEY (id_genero) REFERENCES genero(id)
         * );
         */
        Schema::create('movies', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title');
            //$table->string('slug')->unique();
            $table->decimal('rating', 3, 1)->unsigned();
            $table->tinyInteger('awards')->unsigned()->default(0);
            $table->date('release_date');
            $table->smallInteger('length')->unsigned()->nullable();
            $table->string('banner')->nullable();
            $table->float('price', 8, 2);
            $table->tinyInteger('genre_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
