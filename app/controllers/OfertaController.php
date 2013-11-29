<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class OfertaController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		Oferta::create(AsignarValoresPost());
	}
	public static function ModificarBD($idRegistro){
		$Oferta = Oferta::find($idRegistro);
		$Oferta->fill(OfertaController::AsignarValoresPost());
		$Oferta->save();
		return $Oferta;
	}
	public static function AsignarValoresPost(){
		return array(
			'idTienda'=>Input::get('idTienda'),
			'nombreOferta'=>Input::get('nombreOferta'),
			'descripcionOferta'=>Input::get('descripcionOferta').' '.Input::get('tipoMoneda'),
			'precioNormalOferta'=>Input::get('precioNormalOferta').' '.Input::get('tipoMoneda'),
			'precioOferta'=>Input::get('precioOferta').' '.Input::get('tipoMoneda'),
			'precioOfertaSuscripcion'=>Input::get('precioOfertaSuscripcion').' '.Input::get('tipoMoneda'),
			'fechaInicioOferta'=>Input::get('fechaInicioOferta'),
			'fechaTerminoOferta'=>Input::get('fechaTerminoOferta'));
	}

	public static function Registrar(){
		return View::make('');
	}

	public static function Editar($idRegistro){
		return View::make('')
		->with('idRegistro',$idRegistro);
	}

	public static function ListarTodo(){
		$ofertas = Oferta::all();
		return View::make('Panel.Usuario.OfertasTienda')
		->with('ofertas',$ofertas);
	}

	public static function ListarPorID($idRegistro){
		$Oferta = Oferta::get($idRegistro);
		$Oferta->load('personajuridica');
		$Oferta->load('persona');
		return $Oferta;
	}

}