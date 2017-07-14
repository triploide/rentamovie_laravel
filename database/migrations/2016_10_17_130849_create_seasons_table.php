<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE temporada (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NULL,
         *     numero              INT UNSIGNED,
         *     fecha_de_estreno    DATE NOT NULL,
         *     fecha_de_fin        DATE NOT NULL,
         *     id_serie            INT UNSIGNED,
         *     FOREIGN KEY (id_serie) REFERENCES serie(id)
         * );
         */
        Schema::create('seasons', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->tinyInteger('number')->unsigned()->nullable();
            $table->date('release_date');
            $table->date('end_date');
            $table->smallInteger('serie_id')->unsigned()->index();
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
        Schema::dropIfExists('seasons');
    }
}
