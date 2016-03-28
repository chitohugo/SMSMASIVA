<?php

Route::group(['middleware' => ['web']], function () {
	//

	Route::auth();
	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');
	Route::resource('enviar', 'EnviarController');
	Route::get('cargos/{mun}', 'EnviarController@getCargos');
	Route::get('numeros/{mun}/{carg}', 'EnviarController@getNumeros');
	Route::get('agregar', 'AgregarController@create');
	Route::post('agregar/store', 'AgregarController@store');
	

});
