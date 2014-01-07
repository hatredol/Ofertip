<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class OfertaController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD($idTienda){
		Oferta::create(OfertaController::AsignarValoresPost($idTienda));
	}
	public static function ModificarBD($idRegistro){
		$Oferta = Oferta::find($idRegistro);
		$Oferta->fill(OfertaController::AsignarValoresPost(array()));
		$Oferta->save();
		return $Oferta;
	}
	public static function AsignarValoresPost($idRegistro){
		return array(
			'idTienda'=>$idRegistro,
			'nombreOferta'=>Input::get('nombreOferta'),
			'descripcionOferta'=>Input::get('descripcionOferta'),
			'precioNormalOferta'=>Input::get('tipoMoneda').' '.Input::get('precioNormalOferta'),
			'precioOferta'=>Input::get('tipoMoneda').' '.Input::get('precioOferta'),
			'precioOfertaSuscripcion'=>Input::get('tipoMoneda').' '.Input::get('precioOfertaSuscripcion'),
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

	public static function BuscarOfertas($idTienda){
		return Oferta::where('idTienda','=',$idTienda)->get();
	}

}