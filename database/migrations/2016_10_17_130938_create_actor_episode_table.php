<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE actor_episodio (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     id_actor            INT UNSIGNED NOT NULL,
         *     id_episodio         INT UNSIGNED NOT NULL,
         *     FOREIGN KEY (id_actor) REFERENCES actor(id),
         *     FOREIGN KEY (id_episodio) REFERENCES episodio(id)
         * );
         */
        Schema::create('actor_episode', function (Blueprint $table) {
            $table->mediumInteger('actor_id')->unsigned();
            $table->mediumInteger('episode_id')->unsigned();
            $table->primary(['actor_id', 'episode_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_episode');
    }
}
