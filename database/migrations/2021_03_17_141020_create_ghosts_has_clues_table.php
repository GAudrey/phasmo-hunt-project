<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhostsHasCluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghosts_has_clues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_ghs', 11);
            $table->integer('fk_id_ghosts')->unsigned();
            $table->integer('fk_id_clues')->unsigned();
            $table->foreign('fk_id_ghosts')->references('id_ghost')->on('t_ghosts');
            $table->foreign('fk_id_clues')->references('id_clue')->on('t_clues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ghosts_has_clues');
    }
}
