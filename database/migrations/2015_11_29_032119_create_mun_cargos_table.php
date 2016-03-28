<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mun_cargos', function(Blueprint $table)
        {
           
            $table->integer('municipio_id');
            $table->primary(array('municipio_id', 'cargo_id'));
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
        Schema::drop('mun_cargos');
    }
}
