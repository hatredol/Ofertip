<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class UsuarioController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		Usuario::create(UsuarioController::AsignarValoresPost());
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
		return array(
				'idTipoUsuario'=> '1',
				'usuario'=>Input::get('usuario'),
				'password'=>Hash::make(Input::get('password')));
	}

	public static function Editar($idRegistro){
		return View::make('')
		->with('idRegistro',Input::find($idRegistro));
	}

	public static function ListarTodo(){
		return Usuario::with('personajuridica.persona');
	}

	public static function ListarPorID($idRegistro){
		$Usuario = Usuario::get($idRegistro);
		$Usuario->load('personajuridica');
		$Usuario->load('persona');
		return $Usuario;
	}

	public static function Login(){
		$Usuario = array(
			'usuario'=>Input::get('usuario'),
			'password'=>Input::get('password'));
		if(Auth::attempt($Usuario,true))
		{
			Redirect::route('/');
		}
	}

	public static function LogOut(){
		Auth::logout();
		//Falta Redireccionar
		//Redirect::to('/');
	}

}