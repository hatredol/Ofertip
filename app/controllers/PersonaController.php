<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD(){
		$Persona = Persona::create(AsignarValoresPost());
		return $Persona->idPersona;
	}
	public static function ModificarBD($idRegistro){
		$persona = Persona::find($idRegistro);
		$persona->fill(PersonaController::AsignarValoresPost());
		$persona->save();
		return $persona;
	}
	public static function AsignarValoresPost(){
		return array();
	}

}