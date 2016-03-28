	Route::get('cargos', function(Request $request){
        $mun = $request->input('mun'); 
        return $result = DB::select('select * from cargos join mun_cargos on cargo_id=id_cargo and municipio_id = ?',[$mun] );     

        
        });
    Route::get('numeros', function(Request $request){
        $mun = $request->input('mun'); 
        $carg = $request->input('carg'); 
        return $result = DB::select('select * from datos_pers where municipio_id=? and cargo_id= ?',[$mun,$carg] );
        
       
        });
