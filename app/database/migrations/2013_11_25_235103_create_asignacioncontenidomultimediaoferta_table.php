<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacionContenidoMultimediaOfertaTable extends Migration {

	/*
	 * Run the migrations.
	 *
	 * @return void*/
	 
	public function up()
	{
		Schema::create('CategoriaTienda', function(Blueprint $table) {
			$table->increments('idCategoriaTienda');
			$table->string('nombreCategoriaTienda', 100)->nullable();
		});
		Schema::create('TipoContenidoMultimedia', function(Blueprint $table) {
			$table->increments('idTipoContenidoMultimedia');
			$table->string('nombreContenidoMultimedia', 45)->nullable();
		});
		Schema::create('ContenidoMultimedia', function(Blueprint $table) {
			$table->increments('idContenidoMultimedia');
			$table->unsignedInteger('idTipoContenidoMultimedia');
			$table->string('rutaContenidoMultimedia', 100)->nullable();
			$table->text('descripcionContenidoMultimedia')->nullable();
			$table->foreign('idTipoContenidoMultimedia')->references('idTipoContenidoMultimedia')->on('TipoContenidoMultimedia');
		});
		
		Schema::create('Persona', function(Blueprint $table) {
			$table->increments('idPersona');
			$table->string('indicadorActivo', 1)->default('A')->nullable();
			$table->timestamp('fechaCreacion')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
		});
		Schema::create('PersonaJuridica', function(Blueprint $table) {
			$table->increments('idPersonaJuridica');
			$table->string('nombrePersonaJuridica', 100)->nullable();
			$table->string('direccionPersonaJuridica', 100)->nullable();
			$table->string('telefonoPersonaJuridica', 45)->nullable();
			$table->foreign('idPersonaJuridica')->references('idPersona')->on('Persona');
		});
		Schema::create('PersonaNatural', function(Blueprint $table) {
			$table->increments('idPersonaNatural');
			$table->string('nombrePersonaNatural', 45)->nullable();
			$table->string('apellidoPaternoPersonaNatural', 45)->nullable();
			$table->foreign('idPersonaNatural')->references('idPersona')->on('Persona');
		});
		Schema::create('Cliente', function(Blueprint $table) {
			$table->unsignedInteger('idCliente');
			$table->string('idServicio', 45)->nullable();
			$table->foreign('idCliente')->references('idPersonaNatural')->on('PersonaNatural');
		});
		Schema::create('TipoPlan', function(Blueprint $table) {
			$table->increments('idTipoPlan');
			$table->string('nombreTipoPlan', 45)->nullable();
			$table->string('costoTipoPlan', 45)->nullable();
			$table->unsignedInteger('nroMesesTipoPlan')->nullable();
		});
		
		Schema::create('Usuario', function(Blueprint $table) {
			$table->increments('idUsuario');
			$table->string('usuario', 45)->nullable();
			$table->string('password', 45)->nullable();
			$table->string('indicadorActivo', 1)->default('A')->nullable();
		});
		Schema::create('Tienda', function(Blueprint $table) {
			$table->increments('idTienda');
			$table->unsignedInteger('idCategoriaTienda');
			$table->unsignedInteger('idUsuario');
			$table->text('descripcionTienda')->nullable();
			$table->string('horarioTienda', 100)->nullable();
			$table->foreign('idCategoriaTienda')->references('idCategoriaTienda')->on('CategoriaTienda');
			$table->foreign('idUsuario')->references('idUsuario')->on('Usuario');
		});
		Schema::create('Oferta', function(Blueprint $table) {
			$table->increments('idOferta');
			$table->unsignedInteger('idTienda');
			$table->text('descripcionOferta')->nullable();
			$table->decimal('precioNormalOferta')->nullable();
			$table->decimal('precioOferta')->nullable();
			$table->decimal('precioOfertaSuscripcion')->nullable();
			$table->datetime('fechaInicioOferta')->nullable();
			$table->datetime('fechaTerminoOferta')->nullable();
			$table->timestamp('fechaCreacionOferta')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
		});
		Schema::create('Plan', function(Blueprint $table) {
			$table->increments('idPlan');
			$table->unsignedInteger('idTienda');
			$table->unsignedInteger('idTipoPlan');
			$table->datetime('fechaInicioPlan')->nullable();
			$table->datetime('fechaTerminoPlan')->nullable();
			$table->string('indicadorPlan', 1)->default('A')->nullable();
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
			$table->foreign('idTipoPlan')->references('idTipoPlan')->on('TipoPlan');
		});
		Schema::create('Suscripcion', function(Blueprint $table) {
			$table->increments('idSuscripcion');
			$table->unsignedInteger('idCliente');
			$table->unsignedInteger('idTienda');
			$table->foreign('idCliente')->references('idCliente')->on('Cliente');
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
		});
		Schema::create('TokenOferta', function(Blueprint $table) {
			$table->increments('idTokenOferta');
			$table->unsignedInteger('idOferta');
			$table->unsignedInteger('idSuscripcion');
			$table->string('tokenOferta', 5)->nullable();
			$table->timestamp('fechaCreacionTokenOferta')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
			$table->foreign('idOferta')->references('idOferta')->on('Oferta');
			$table->foreign('idSuscripcion')->references('idSuscripcion')->on('Suscripcion');
		});
		Schema::create('ContenidoMultimediaOferta', function(Blueprint $table) {
			$table->increments('idAsignacionContenidoMultimediaOferta');
			$table->unsignedInteger('idContenidoMultimedia');
			$table->unsignedInteger('idOferta')->references('idOferta')->on('Oferta');
			$table->foreign('idContenidoMultimedia')->references('idContenidoMultimedia')->on('ContenidoMultimedia');
			$table->foreign('idOferta')->references('idOferta')->on('Oferta');
		});
		Schema::create('ContenidoMultimediaTienda', function(Blueprint $table) {
			$table->increments('idAsignacionContenidoMultimediaTienda');
			$table->unsignedInteger('idContenidoMultimedia');
			$table->unsignedInteger('idTienda');
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
			$table->foreign('idContenidoMultimedia')->references('idContenidoMultimedia')->on('ContenidoMultimedia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void*/
	 
	public function down()
	{
		Schema::drop('AsignacionContenidoMultimediaOferta');
	}

}
