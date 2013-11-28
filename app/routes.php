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
Route::get('Panel/Perfil', function()
{
	return View::make('Panel.Usuario.PerfilUsuario');
});
Route::get('Panel/Ofertas', function()
{
	return View::make('Panel.Usuario.OfertasTienda');
});
Route::get('Panel/Suscritos', function()
{
	return View::make('Panel.Usuario.SuscritosTienda');
});
Route::get('Panel/Codigos', function()
{
	return View::make('Panel.Usuario.CodigosOferta');
});
Route::get('Panel/Reportes', function()
{
	return View::make('Panel.Usuario.ReportesTienda');
});