<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD($idRegistro){
		$Persona = Persona::create(PersonaController::AsignarValoresPost(null));
		return $Persona->idPersona;
	}
	public static function ModificarBD($idRegistro){
		/*$persona = Persona::find($idRegistro);
		$persona->fill(PersonaController::AsignarValoresPost(array(null));
		$persona->save();
		return $persona;*/
	}
	public static function AsignarValoresPost($idRegistro){
		return array();
	}

}