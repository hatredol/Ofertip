<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('TipoUsuarioTableSeeder');
        $this->command->info('TipoUsuario table seeded!');
		// $this->call('TipoUsuarioTableSeeder');
	}

}

class TipoUsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('TipoUsuario')->delete();
        TipoUsuario::create(array('nombreTipoUsuario' => 'Empresa'));

        DB::table('Usuario')->delete();
        Usuario::create(array(
            'idTipoUsuario'=>'1',
            'usuario'=>'Ofertip',
            'password'=>Hash::make('tinydeal'),
            'emailUsuario'=>'hola@id-peru.com'));

        DB::table('Persona')->delete();
        Persona::create(array());
        Persona::create(array());

        DB::table('PersonaJuridica')->delete();
        PersonaJuridica::create(array(
        	'idPersonaJuridica'=>'1',
        	'razonSocialPersonaJuridica'=>'Tienda Ofertip S.R.L.',
			'direccionPersonaJuridica'=>'Calle Tacna Nro 1920',
			'telefonoPersonaJuridica'=>'947495863'));
        PersonaJuridica::create(array(
            'idPersonaJuridica'=>'2',
            'razonSocialPersonaJuridica'=>'Tienda Marka-Comercial E.I.R.L.',
            'direccionPersonaJuridica'=>'Calle Arica Nro 1920',
            'telefonoPersonaJuridica'=>'947495863'));

        DB::table('CategoriaTienda')->delete();
        CategoriaTienda::create(array(
        	'nombreCategoriaTienda'=>'Comida'));
        CategoriaTienda::create(array(
            'nombreCategoriaTienda'=>'Entretenimiento'));
        CategoriaTienda::create(array(
            'nombreCategoriaTienda'=>'Comercio'));

        DB::table('Tienda')->delete();
        Tienda::create(array(
        	'idTienda'=>'1',
        	'idCategoriaTienda'=>'1',
        	'idUsuario'=>'1',
            'nombreTienda'=>'Tienda Ofertip!',
        	'descripcionTienda'=>'Una tienda Innovadora',
			'horarioTienda'=>'Lunes-Viernes 9am-10pm'));
        Tienda::create(array(
            'idTienda'=>'2',
            'idCategoriaTienda'=>'1',
            'idUsuario'=>'1',
            'nombreTienda'=>'Tienda Marka-Comercial',
            'descripcionTienda'=>'Una tienda para el futuro de Tacna',
            'horarioTienda'=>'Lunes-Viernes 9am-10pm'));

        DB::table('Oferta')->delete();
        Oferta::create(array(
            'idTienda'=>'1',
            'nombreOferta'=>'Super Promocion 6 Meses 50% Descuento',
            'descripcionOferta'=>'Esta oferta proyectara a tu negocio en el mercado, no te la puedes perder! Ingresa al mundo de la Informatica con los mas bajos precios del mercado',
            'precioNormalOferta'=>'S/. 50.00',
            'precioOferta'=>'S/. 49.99',
            'precioOfertaSuscripcion'=>'S/. 49.50',
            'fechaInicioOferta'=>'2013-11-28',
            'fechaTerminoOferta'=>'2013-11-30'
            ));
        Oferta::create(array(
            'idTienda'=>'1',
            'nombreOferta'=>'Super Promocion en el Paquete Ilimitado 20% Descuento',
            'descripcionOferta'=>'Esta oferta proyectara a tu negocio en el mercado, no te la puedes perder! Ingresa al mundo de la Informatica con los mas bajos precios del mercado',
            'precioNormalOferta'=>'S/. 80.00',
            'precioOferta'=>'S/. 79.99',
            'precioOfertaSuscripcion'=>'S/. 69.50',
            'fechaInicioOferta'=>'2013-11-25',
            'fechaTerminoOferta'=>'2013-11-30'
            ));
    }

}