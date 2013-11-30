<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class TiendaController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		
		$Tienda = Tienda::create(TiendaController::AsignarValoresPost());
		$Tienda->motorvehiculo()->save($motorVehiculo);
	}
	public static function ModificarBD($idRegistro){
		$Tienda = Tienda::find($idRegistro);
		$Tienda->fill(TiendaController::AsignarValoresPost());
		$Tienda->save();
		return $Tienda;
	}
	public static function AsignarValoresPost(){
		array(
			'idCategoriaTienda'=>Input::get('idCategoriaTienda'),
			'idUsuario'=>Input::get('idUsuario'),
			'descripcionTienda'=>Input::get('descripcionTienda'),
			'horarioTienda'=>Input::get('horarioTienda'));
	}

	public static function Registrar(){
		return View::make('');
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