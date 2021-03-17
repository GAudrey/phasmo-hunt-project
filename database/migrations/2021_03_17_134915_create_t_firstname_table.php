<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFirstnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_firstname', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_firstname', 11);
            $table->string('firstname', 50);
            $table->string('sexe', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_firstname');
    }
}
