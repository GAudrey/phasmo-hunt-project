<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGhostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_ghosts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_ghost', 11);
            $table->string('types', 50);
            $table->string('strength', 255);
            $table->string('weakness', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_ghosts');
    }
}
