<?php

namespace SMS;

use Illuminate\Database\Eloquent\Model;

class EstadoMensaje extends Model {

	protected $table='estado_mensajes';

	protected $fillable = ['estado','estado_envio','cargo','destino','mensaje'];
	
	public $timestamps = false;


	

}
