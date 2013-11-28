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
            'password'=>Hash::make('tinydeal')));

        DB::table('Persona')->delete();
        Persona::create(array());

        DB::table('PersonaJuridica')->delete();
        PersonaJuridica::create(array(
        	'idPersonaJuridica'=>'1',
        	'nombrePersonaJuridica'=>'Tienda Ofertip',
			'direccionPersonaJuridica'=>'Calle Tacna Nro 1920',
			'telefonoPersonaJuridica'=>'947495863'));

        DB::table('CategoriaTienda')->delete();
        CategoriaTienda::create(array(
        	'nombreCategoriaTienda'=>'Comida'));

        DB::table('Tienda')->delete();
        Tienda::create(array(
        	'idTienda'=>'1',
        	'idCategoriaTienda'=>'1',
        	'idUsuario'=>'1',
        	'descripcionTienda'=>'Una tienda Innovadora',
			'horarioTienda'=>'Lunes-Viernes 9am-10pm'));
    }

}