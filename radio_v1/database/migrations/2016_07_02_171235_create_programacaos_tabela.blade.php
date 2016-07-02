<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacaosTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia'); 
			$table->integer('idprograma');
			$table->integer('idradialista');
			$table->time('horario');
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
        Schema::dropIfExists('programacaos');
    }
}
