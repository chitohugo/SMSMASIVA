<?php

namespace SMS;
use DB;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {

	protected $table='cargos';
	protected $primaryKey = 'id_cargo';
	protected $fillable = ['cargo'];

	public function municipio(){
    	
    	return $this->belongsToMany('SMS\Municipio');

    }

   

}

