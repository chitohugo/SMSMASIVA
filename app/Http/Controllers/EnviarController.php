<?php
namespace SMS\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Redirect;
use SMS\Datos_Pers;
use SMS\Http\Controllers\Controller;
use SMS\Http\Controllers\EnviarController;
use SMS\Municipio;
use SMS\Mun_Cargo;
use SMS\EstadoMensaje;
use SMS\Http\Requests\EnvioRequest;


class EnviarController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$mun = Municipio::orderBy('municipio', 'asc')->get();
		return view('mensaje.create', compact('mun'));

	}

	public function getCargos(Request $request, $mun) {
		if ($request->ajax()) {
			$cargos = Mun_Cargo::cargos($mun);
			return response()->json($cargos);

		}
	}

	public function getNumeros(Request $request,$mun,$carg) {

		if ($request->ajax()) {
			
			$numeros = Datos_Pers::numeros($mun, $carg);
			return response()->json($numeros);

		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(EnvioRequest $request) {		
		
		
		$array = $request['multiselect'];
			foreach ($array as $destino ) {
				EstadoMensaje::create([
				'estado' => $request['estado'],
				'estado_envio'=>$request['estado'],
				'cargo'   =>$request['carg'],
				'destino' => $destino,
				'mensaje' => $request['mensaje'],
				]);	
			}

		Session::flash('message','Enviando Mensajes...!');
		return Redirect::back();

				
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

}