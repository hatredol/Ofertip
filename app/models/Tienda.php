<?php

class Tienda extends Eloquent{
	protected $table = 'Tienda';
	protected $primaryKey = 'idTienda';
	public $timestamps = false;
	protected $guarded = array('idTienda');

	public function contenidomultimedia(){
		return $this->belongsToMany('ContenidoMultimedia','ContenidoMultimediaTienda','idTienda','idContenidoMultimedia')->orderBy('ContenidoMultimediaTienda.idContenidoMultimediaTienda', 'asc');
	}

}