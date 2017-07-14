<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE actor (
         *     id          		INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     nombre      		VARCHAR(100) NOT NULL,
         *     apellido    		VARCHAR(100) NOT NULL,
         *     rating              DECIMAL(3,1) UNSIGNED NULL,
         *     id_pelicula_preferida INT UNSIGNED NULL
         * );
         */
        Schema::create('actors', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('first_name', 63);
            $table->string('last_name', 63);
            //$table->string('slug', 127)->unique();
            $table->decimal('rating', 3, 1)->nullable();
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
        Schema::dropIfExists('actors');
    }
}
