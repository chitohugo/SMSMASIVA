<?php

namespace SMS;

use Illuminate\Database\Eloquent\Model;

class MensajesEnviados extends Model {


	protected $table='mensajes_enviados';

	protected $fillable = ['destino','mensaje','hora','fecha'];

	public $timestamps = false;


}
