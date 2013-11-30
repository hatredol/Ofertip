<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class TiendaController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		$idPersona = PersonaController::AgregarBD();
		$idPersonaJuridica = PersonaJuridicaController::AgregarBD($idPersona);
		Tienda::create(TiendaController::AsignarValoresPost($idPersonaJuridica));
	}
	public static function ModificarBD($idRegistro){
		$Tienda = Tienda::find($idRegistro);
		$Tienda->fill(TiendaController::AsignarValoresPost());
		$Tienda->save();
		return $Tienda;
	}
	public static function AsignarValoresPost($idPersonaJuridica){
		return array(
			'idCategoriaTienda'=>$idPersonaJuridica,
			'idUsuario'=>Input::get('idUsuario'),
			'descripcionTienda'=>Input::get('descripcionTienda'),
			'horarioTienda'=>Input::get('horarioTienda'));
	}

	public static function Registrar(){
		$CategoriasTienda = CategoriaTienda::all();
		return View::make('Plan.AdquirirPlan')
		->with('categoriastienda',$CategoriasTienda);
	}

	public static function Editar($idRegistro){
		return View::make('')
		->with('idRegistro',$idRegistro);
	}

	public static function ListarTodo(){
		return Tienda::all();
	}

	public static function ListarPorID($idRegistro){
		$Tienda = Tienda::get($idRegistro);
		$Tienda->load('personajuridica');
		$Tienda->load('persona');
		return $Tienda;
	}

}