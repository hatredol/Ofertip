<?php

class PersonaJuridica extends Eloquent{
	protected $table = 'PersonaJuridica';
	protected $primaryKey = 'idPersonaJuridica';
	public $timestamps = false;
	protected $guarded = array();

}