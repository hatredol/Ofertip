<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaJuridicaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD($idRegistro){
		$idPersona = PersonaController::AgregarBD(null);
		$PersonaJuridica = PersonaJuridica::create(PersonaJuridicaController::AsignarValoresPost($idPersona));
		return $idRegistro;
	}
	public static function ModificarBD($idRegistro){
		$PersonaJuridica = PersonaJuridica::find($idRegistro);
		$PersonaJuridica->fill(PersonaJuridicaController::AsignarValoresPost());
		$PersonaJuridica->save();
		return $PersonaJuridica;
	}
	public static function AsignarValoresPost($idPersona){
		return array(
			'idPersonaJuridica'=>$idPersona,
			'nombrePersonaJuridica'=>Input::get('nombrePersonaJuridica'),
			'direccionPersonaJuridica'=>Input::get('direccionPersonaJuridica'),
			'telefonoPersonaJuridica'=>Input::get('telefonoPersonaJuridica'));
	}
}