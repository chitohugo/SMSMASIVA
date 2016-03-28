<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_pers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('numero',11)->unique();
            $table->integer('municipio_id');
            $table->foreign('municipio_id')
                  ->references('id_municipio')
                  ->on('municipios')
                  ->onDelete('cascade');    

            $table->integer('cargo_id');
            $table->foreign('cargo_id')
                  ->references('id_cargo')
                  ->on('cargos')
                  ->onDelete('cascade');    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('datos_pers');
    }
}
