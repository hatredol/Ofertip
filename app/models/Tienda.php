<?php

class Tienda extends Eloquent{
	protected $table = 'Tienda';
	protected $primaryKey = 'idTienda';
	public $timestamps = false;
	protected $guarded = array();

	public function contenidomultimedia(){
		return $this->belongsToMany('ContenidoMultimedia','ContenidoMultimediaTienda','idTienda','idContenidoMultimedia')->orderBy('ContenidoMultimediaTienda.idContenidoMultimediaTienda', 'asc');
	}

	public function personajuridica(){
		return $this->belongsTo('PersonaJuridica','idTienda');
	}


	public function scopeTiendasDeUsuario($query, $idUsuario)
    {
        return $query->where('idUsuario','=',$idUsuario);
    }
}