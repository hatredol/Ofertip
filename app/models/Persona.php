<?php

class Persona extends Eloquent{
	protected $table = 'Persona';
	protected $primaryKey = 'idPersona';
	public $timestamps = false;
	protected $guarded = array('idPersona','indicadorActivo','fechaCreacion');

	public function personanatural(){

		return $this->hasOne('PersonaNatural','idPersonaNatural');
	}

	public function personajuridica(){

		return $this->hasOne('PersonaJuridica','idPersonaJuridica');
	}
}