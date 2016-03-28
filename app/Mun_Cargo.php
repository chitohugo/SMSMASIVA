<?php

namespace SMS;
use DB;

use Illuminate\Database\Eloquent\Model;

class Mun_Cargo extends Model
{
    protected $table='mun_cargos';	
	protected $fillable = ['municipio_id','cargo_id'];

	public static function cargos($mun){
    	
    	return $result = DB::select('select * from cargos join mun_cargos on cargo_id=id_cargo and municipio_id = ?',[$mun]);
    	
    	}

}
