<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaJuridicaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD(){
		$idPersona = PersonaController::AgregarBD();
		$idRegistro["idPersona"] = $idPersona;
		$PersonaJuridica = PersonaJuridica::create(PersonaJuridicaController::AsignarValoresPost($idRegistro));
		return $idRegistro;
	}
	public static function ModificarBD($idRegistro){
		$PersonaJuridica = PersonaJuridica::find($idRegistro);
		$PersonaJuridica->fill(PersonaJuridicaController::AsignarValoresPost());
		$PersonaJuridica->save();
		return $PersonaJuridica;
	}
	public static function AsignarValoresPost($idRegistro){
		return array(
			'idPersonaJuridica'=>$idRegistro["idPersona"],
			'nombrePersonaJuridica'=>Input::get('nombrePersonaJuridica'),
			'direccionPersonaJuridica'=>Input::get('direccionPersonaJuridica'),
			'telefonoPersonaJuridica'=>Input::get('telefonoPersonaJuridica'));
	}
}