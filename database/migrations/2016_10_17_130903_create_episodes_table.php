<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE episodio (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NULL,
         *     numero              INT UNSIGNED,
         *     fecha_de_estreno    DATE NOT NULL,
         *     rating              DECIMAL(3,1) UNSIGNED NOT NULL,
         *     id_temporada        INT UNSIGNED,
         *     FOREIGN KEY (id_temporada) REFERENCES temporada(id)
         * );
         */
        Schema::create('episodes', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('title', 255);
            //$table->string('slug', 255);
            $table->tinyInteger('number')->unsigned();
            $table->date('release_date');
            $table->decimal('rating', 3, 1);
            $table->string('banner')->nullable();
            $table->float('price', 8, 2);
            $table->smallInteger('season_id')->unsigned()->index();
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
        Schema::dropIfExists('episodes');
    }
}
