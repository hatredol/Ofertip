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
		Schema::create('TipoUsuario', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idTipoUsuario');
			$table->string('nombreTipoUsuario', 100)->nullable();
		});
		Schema::create('CategoriaTienda', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idCategoriaTienda');
			$table->string('nombreCategoriaTienda', 100)->nullable();
		});
		Schema::create('TipoContenidoMultimedia', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idTipoContenidoMultimedia');
			$table->string('nombreContenidoMultimedia', 45)->nullable();
		});
		Schema::create('ContenidoMultimedia', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idContenidoMultimedia');
			$table->unsignedInteger('idTipoContenidoMultimedia');
			$table->string('rutaContenidoMultimedia', 100)->nullable();
			$table->text('descripcionContenidoMultimedia')->nullable();
			$table->foreign('idTipoContenidoMultimedia')->references('idTipoContenidoMultimedia')->on('TipoContenidoMultimedia');
		});
		
		Schema::create('Persona', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idPersona');
			$table->string('indicadorActivo', 1)->default('A')->nullable();
			$table->timestamp('fechaCreacion')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
		});
		Schema::create('PersonaJuridica', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->unsignedInteger('idPersonaJuridica');
			$table->string('nombrePersonaJuridica', 100)->nullable();
			$table->string('direccionPersonaJuridica', 100)->nullable();
			$table->string('telefonoPersonaJuridica', 45)->nullable();
			$table->string('RUC', 11)->nullable();
			$table->primary('idPersonaJuridica');
			$table->foreign('idPersonaJuridica')->references('idPersona')->on('Persona');
		});
		Schema::create('PersonaNatural', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->unsignedInteger('idPersonaNatural');
			$table->string('nombrePersonaNatural', 45)->nullable();
			$table->string('apellidoPaternoPersonaNatural', 45)->nullable();
			$table->primary('idPersonaNatural');
			$table->foreign('idPersonaNatural')->references('idPersona')->on('Persona');
		});
		Schema::create('Cliente', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->unsignedInteger('idCliente');
			$table->string('idServicio', 45)->nullable();
			$table->primary('idCliente');
			$table->foreign('idCliente')->references('idPersonaNatural')->on('PersonaNatural');
		});
		Schema::create('TipoPlan', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idTipoPlan');
			$table->string('nombreTipoPlan', 45)->nullable();
			$table->string('costoTipoPlan', 45)->nullable();
			$table->unsignedInteger('nroMesesTipoPlan')->nullable();
		});
		
		Schema::create('Usuario', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idUsuario');
			$table->unsignedInteger('idTipoUsuario');
			$table->string('usuario', 45)->nullable();
			$table->string('password', 60)->nullable();
			$table->string('emailUsuario', 150)->nullable();
			$table->string('indicadorActivo', 1)->default('A')->nullable();
			$table->foreign('idTipoUsuario')->references('idTipoUsuario')->on('TipoUsuario');
		});

		Schema::create('Tienda', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->unsignedInteger('idTienda');
			$table->unsignedInteger('idCategoriaTienda');
			$table->unsignedInteger('idUsuario');
			$table->text('descripcionTienda')->nullable();
			$table->string('horarioTienda', 100)->nullable();
			$table->string('urlTienda', 150)->nullable();
			$table->primary('idTienda');
			$table->foreign('idCategoriaTienda')->references('idCategoriaTienda')->on('CategoriaTienda');
			$table->foreign('idUsuario')->references('idUsuario')->on('Usuario');
		});

		Schema::create('Oferta', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idOferta');
			$table->unsignedInteger('idTienda');
			$table->string('nombreOferta', 200)->nullable();
			$table->text('descripcionOferta')->nullable();
			$table->decimal('precioNormalOferta')->nullable();
			$table->decimal('precioOferta')->nullable();
			$table->decimal('precioOfertaSuscripcion')->nullable();
			$table->datetime('fechaInicioOferta')->nullable();
			$table->datetime('fechaTerminoOferta')->nullable();
			$table->string('indicadorActivo', 1)->default('A')->nullable();
			$table->timestamp('fechaCreacionOferta')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
		});

		Schema::create('Plan', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idPlan');
			$table->unsignedInteger('idTienda');
			$table->unsignedInteger('idTipoPlan');
			$table->datetime('fechaInicioPlan')->nullable();
			$table->datetime('fechaTerminoPlan')->nullable();
			$table->string('indicadorActivo', 1)->default('A')->nullable();
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
			$table->foreign('idTipoPlan')->references('idTipoPlan')->on('TipoPlan');
		});

		Schema::create('Suscripcion', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idSuscripcion');
			$table->unsignedInteger('idCliente');
			$table->unsignedInteger('idTienda');
			$table->foreign('idCliente')->references('idCliente')->on('Cliente');
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
		});

		Schema::create('TokenOferta', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idTokenOferta');
			$table->unsignedInteger('idOferta');
			$table->unsignedInteger('idSuscripcion');
			$table->string('tokenOferta', 5)->nullable();
			$table->timestamp('fechaCreacionTokenOferta')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
			$table->foreign('idOferta')->references('idOferta')->on('Oferta');
			$table->foreign('idSuscripcion')->references('idSuscripcion')->on('Suscripcion');
		});

		Schema::create('ContenidoMultimediaOferta', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idAsignacionContenidoMultimediaOferta');
			$table->unsignedInteger('idContenidoMultimedia');
			$table->unsignedInteger('idOferta')->references('idOferta')->on('Oferta');
			$table->foreign('idContenidoMultimedia')->references('idContenidoMultimedia')->on('ContenidoMultimedia');
			$table->foreign('idOferta')->references('idOferta')->on('Oferta');
		});

		Schema::create('ContenidoMultimediaTienda', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idAsignacionContenidoMultimediaTienda');
			$table->unsignedInteger('idContenidoMultimedia');
			$table->unsignedInteger('idTienda');
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
			$table->foreign('idContenidoMultimedia')->references('idContenidoMultimedia')->on('ContenidoMultimedia');
		});

		Schema::create('TagTienda', function(Blueprint $table) {
			$table->engine ='InnoDB';
			$table->increments('idTagTienda');
			$table->unsignedInteger('idTienda');
			$table->string('nombreTags');
			$table->foreign('idTienda')->references('idTienda')->on('Tienda');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void*/
	 
	public function down()
	{
		Schema::drop('ContenidoMultimediaTienda');
		Schema::drop('ContenidoMultimediaOferta');
		Schema::drop('TokenOferta');
		Schema::drop('Suscripcion');
		Schema::drop('Plan');
		Schema::drop('Oferta');
		Schema::drop('Tienda');
		Schema::drop('TipoPlan');
		Schema::drop('Usuario');
		Schema::drop('Cliente');
		Schema::drop('PersonaNatural');
		Schema::drop('PersonaJuridica');
		Schema::drop('Persona');
		Schema::drop('ContenidoMultimedia');
		Schema::drop('TipoContenidoMultimedia');
		Schema::drop('CategoriaTienda');
		
	}

}
