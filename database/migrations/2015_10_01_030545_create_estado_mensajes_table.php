<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoMensajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado_mensajes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('estado',1);
			$table->string('estado_envio',1);
			$table->string('cargo',20);
			$table->string('destino',11);
			$table->string('mensaje',160);
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estado_mensajes');
	}

}
