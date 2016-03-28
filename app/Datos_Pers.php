<?php

namespace SMS;
use DB;

use Illuminate\Database\Eloquent\Model;

class Datos_Pers extends Model
{
     protected $table='datos_pers';	
	 protected $fillable = ['numero','municipio_id','cargo_id'];

	 public $timestamps = false;


	  public static function numeros($mun,$carg){
    	
    	return $result = DB::select('select * from datos_pers where municipio_id = ? and cargo_id=?',[$mun,$carg]);
    	
    }

}

