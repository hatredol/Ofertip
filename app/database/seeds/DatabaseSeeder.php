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
    }

}