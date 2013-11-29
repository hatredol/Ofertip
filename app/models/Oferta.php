<?php

class Oferta extends Eloquent{
	protected $table = 'Oferta';
	protected $primaryKey = 'idOferta';
	public $timestamps = false;
	protected $guarded = array('idOferta','indicadorActivo','fechaCreacionOferta');

}