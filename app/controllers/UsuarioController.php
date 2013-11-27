<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class UsuarioController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		Usuario::create(AsignarValoresPost());
	}
	public static function ModificarBD($idRegistro){
		$Usuario = Usuario::find($idRegistro);
		$Usuario->fill(UsuarioController::AsignarValoresPost());
		$Usuario->save();
		return $Usuario;
	}
	public static function Registrar(){

	}
	
	public static function AsignarValoresPost(){
		array(
			'idCategoriaUsuario'=>
			'usuario'=>Input::get('idCategoriaUsuario'),
			'password'=>Input::get('idUsuario');
	}

	public static function Editar($idRegistro){
		return View::make('')
		->with('idRegistro',Input::find($idRegistro));
	}

	public static function ListarTodo(){
		return Usuario::all();
	}

	public static function ListarPorID($idRegistro){
		$Usuario = Usuario::get($idRegistro);
		$Usuario->load('personajuridica');
		$Usuario->load('persona');
		return $Usuario;
	}

}