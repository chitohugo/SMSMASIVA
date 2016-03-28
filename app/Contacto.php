<?php

namespace SMS;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table='contactos';	
	protected $fillable = ['numero','cargo_id'];
	//protected $fillable = ['cedula','nombres','apellidos','telefono', 'email'];
	


	public function scopeContacto($query, $contacto)
		{
			if ($contacto !="")
			{

				$query->where('numero',$contacto);
			}
		}

	public static function numeros($id,$id2){
    	
    	$result = DB::select('select * from datos_pers where cargo_id=? and municipio_id = ?',[$id2],[$id]);
    	return $result;
    }
		
	public $timestamps = false;
}
