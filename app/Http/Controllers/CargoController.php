<?php

namespace SMS\Http\Controllers;

use Illuminate\Http\Request;
use Mun_Cargo;

use SMS\Http\Requests;
use SMS\Http\Controllers\Controller;

class CargoController extends Controller
{
     public function index(Request $request, $mun)
    {      
       if($request->ajax()){
            $cargo = Mun_Cargo::where('cargo_id','=',$mun)->get();
            return view('home',compact('cargo'));
            
        }

    }

}
