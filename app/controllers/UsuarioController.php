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
	
	public static function AsignarValoresPost($idRegistro){
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
			/*$UsuarioLogeado = Auth::user();
			return UsuarioController::BuscarTiendasPorUsuario($UsuarioLogeado->idUsuario);*/
			return Response::json(array('indicadorLogin' => 'Verdadero'));
		}
		else
		{
			return Response::json(array('indicadorLogin' => 'Falso'));
		}
	}

	public static function LogOut(){
		Auth::logout();
	}

	public static function MostrarDashboard(){
		$tiendas = UsuarioController::BuscarTiendasPorUsuario(Auth::user()->idUsuario);
		return View::make('Panel.Usuario.dashboard')
			->with('tiendas',$tiendas);
	}

	public static function BuscarTiendasPorUsuario($idUsuario){
		return DB::table('Tienda')
            ->join('PersonaJuridica', 'PersonaJuridica.idPersonaJuridica', '=', 'Tienda.idTienda')
            ->join('Persona','Persona.idPersona','=','PersonaJuridica.idPersonaJuridica')
            ->whereRAW('Tienda.idUsuario = '.$idUsuario)
            ->select( 'Tienda.urlTienda','PersonaJuridica.nombrePersonaJuridica','Persona.indicadorActivo')
            ->get();
	}

}