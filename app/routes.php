<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*PARTE WEBSITE*/
Route::get('/', function()
{
	return View::make('WebSite.index');
});


/*PARTE PANEL ADMINISTRACION*/

Route::get('Panel/Usuario', function()
{
	return View::make('Panel.Usuario.PanelAdministracionUsuario');
});
Route::get('/Panel', function()
{
	return View::make('formLogin');
});



/*Charlie*/
Route::post('Panel/Usuario/AgregarBD',array('uses'=>'UsuarioController@AgregarBD'));
Route::post('Panel/Usuario/Login',array('uses'=>'UsuarioController@Login'));
