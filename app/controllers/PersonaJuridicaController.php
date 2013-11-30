<?php
use App\Controllers\Interfaces\IPostMantenimiento;

class PersonaJuridicaController extends BaseController implements IPostMantenimiento{

	public static function AgregarBD($idPersonaJuridica){
		$PersonaJuridica = PersonaJuridica::create(AsignarValoresPost($idPersonaJuridica));
		return $PersonaJuridica->idPersonaJuridica;
	}
	public static function ModificarBD($idRegistro){
		$PersonaJuridica = PersonaJuridica::find($idRegistro);
		$PersonaJuridica->fill(PersonaJuridicaController::AsignarValoresPost());
		$PersonaJuridica->save();
		return $PersonaJuridica;
	}
	public static function AsignarValoresPost($idPersonaJuridica){
		return array(
			'idPersonaJuridica'=>$idPersonaJuridica,
			'nombrePersonaJuridica'=>Input::get('nombrePersonaJuridica'),
			'direccionPersonaJuridica'=>Input::get('direccionPersonaJuridica'),
			'telefonoPersonaJuridica'=>Input::get('telefonoPersonaJuridica'));
	}
}