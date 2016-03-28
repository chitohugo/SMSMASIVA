<?php

namespace SMS\Http\Controllers;

use Session;
use Redirect;
use SMS\Http\Controllers\Controller;
use SMS\Http\Controllers\EnviarController;
use SMS\Municipio;
use SMS\Mun_Cargo;
use SMS\Cargo;
use SMS\EstadoMensaje;
use SMS\Datos_Pers;
use SMS\Http\Requests\EnvioRequest;
use SMS\Http\Requests\ContactoRequest;

use Illuminate\Http\Request;

use SMS\Http\Requests;


class AgregarController extends Controller
{
    public function create() {
    	$mun= Municipio::orderBy('municipio', 'asc')->get();
		$car= Cargo::orderBy('cargo', 'asc')->get();
		
		return  view('contacto.create', compact('car','mun'));
	}



	public function store(ContactoRequest $request){

		Datos_Pers::create([
			'numero' => $request['numero'],
			'municipio_id' => $request['municipio'],
			'cargo_id' => $request['cargo'],			
			]);
		
		Session::flash('message','Contacto agregado');
		return Redirect::to('/agregar');
			
	}
}