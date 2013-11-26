<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaJuridicaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD(){
		PersonaJuridica::create(AsignarValoresPost());
	}
	public static function ModificarBD($idRegistro){
		$PersonaJuridica = PersonaJuridica::find($idRegistro);
		$PersonaJuridica->fill(PersonaJuridicaController::AsignarValoresPost());
		$PersonaJuridica->save();
		return $PersonaJuridica;
	}
	public static function AsignarValoresPost(){
		array(
			'idPersonaJuridica'=>Input::get('idPersonaJuridica'),
			'nombrePersonaJuridica'=>Input::get('nombrePersonaJuridica'),
			'direccionPersonaJuridica'=>Input::get('direccionPersonaJuridica'),
			'telefonoPersonaJuridica'=>Input::get('telefonoPersonaJuridica'));
	}
}