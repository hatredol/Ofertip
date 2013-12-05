<?php
use App\Controllers\Interfaces\IPostMantenimiento;
use App\Controllers\Interfaces\IGetMantenimiento;

class TiendaController extends BaseController implements IPostMantenimiento,IGetMantenimiento{

	public static function AgregarBD(){
		$idRegistro = PersonaJuridicaController::AgregarBD();
		$idRegistro['idPersonaJuridica'] = $idRegistro["idPersona"];
		Tienda::create(TiendaController::AsignarValoresPost($idRegistro));
	}
	public static function ModificarBD($idRegistro){
		$Tienda = Tienda::find($idRegistro);
		$Tienda->fill(TiendaController::AsignarValoresPost());
		$Tienda->save();
		return $Tienda;
	}
	public static function AsignarValoresPost($idRegistro){
		return array(
			'idTienda'=>$idRegistro['idPersonaJuridica'],
			'idCategoriaTienda'=>Input::get('idCategoriaTienda'),
			'idUsuario'=>1,
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

	public static function MostrarPanel($idTienda){
	  return View::make('Panel.Usuario.PanelAdministracionUsuario')
	         ->with('tienda', Tienda::find($idTienda));
	}

	public static function MostrarOfertas($idTienda){
		$tienda = Tienda::find($idTienda);
		$ofertas = OfertaController::BuscarOfertas($tienda->idTienda);
	  return View::make('Panel.Usuario.OfertasTienda')
	         ->with('tienda', $tienda)
	         ->with('ofertas',$ofertas);
	}
}