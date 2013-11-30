<?php
namespace App\Controllers\Interfaces;
interface IPostMantenimiento {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public static function AgregarBD();
	public static function ModificarBD($idRegistro);
	public static function AsignarValoresPost($idRegistro);
}