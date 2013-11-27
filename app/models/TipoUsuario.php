<?php

class TipoUsuario extends Eloquent{
	protected $table = 'TipoUsuario';
	protected $primaryKey = 'idTipoUsuario';
	public $timestamps = false;
	protected $guarded = array('idTipoUsuario');


}