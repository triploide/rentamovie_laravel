<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE serie (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NOT NULL,
         *     fecha_de_estreno    DATE NOT NULL,
         *     fecha_de_fin        DATE NOT NULL,
         *     id_genero           INT UNSIGNED,
         *     FOREIGN KEY (id_genero) REFERENCES genero(id)
         * );
         */
        Schema::create('series', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('title', 127);
            //$table->string('slug', 127)->unique();
            $table->date('release_date');
            $table->date('end_date');
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
        Schema::dropIfExists('series');
    }
}
