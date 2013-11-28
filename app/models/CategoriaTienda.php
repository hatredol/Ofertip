<?php

class CategoriaTienda extends Eloquent{
	protected $table = 'CategoriaTienda';
	protected $primaryKey = 'idCategoriaTienda';
	public $timestamps = false;
	protected $guarded = array('idCategoriaTienda');

}