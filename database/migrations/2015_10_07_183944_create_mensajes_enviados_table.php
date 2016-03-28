<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesEnviadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensajes_enviados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('estado',1);
			$table->string('destino',11);
			$table->string('mensaje',160);
			$table->dateTime('hora');
			$table->date('fecha');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mensajes_enviados');
	}

}
