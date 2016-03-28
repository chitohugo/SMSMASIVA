<?php

namespace SMS;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
   
	protected $table='municipios';
	protected $primaryKey = 'id_municipio';
	protected $fillable = ['municipio'];

	public function cargo(){
    	
    	return $this->belongsToMany('SMS\Cargo');

    }
}
