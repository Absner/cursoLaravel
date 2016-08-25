<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*

/*Route::get('/', function () {
    return view('');
});
*/
Route::get('holamundo', function(){
	return "Hola mundo con rutas";
});
/* ejemplo para paso de parametros por URL*/

Route::get('holamundo/{pais}', function($pais){
	return "mi pais es: ".$pais;
});
/*utilizando un controlador en las vistas*/
Route::get('/','fromController@index');

/* Creando una ruta usando el resource para así tener disponibles diferentes metodos de una mismo controlador
para que se cree nuestro controlador con sus metodos básico tecleamos en el terminal(consola) lo siguiente: php artisan make:controller nombre_del_controlador_a_crear --resource en nuestro caso es: controladorResource
*/
Route::resource('resource','controladorRestfull');
