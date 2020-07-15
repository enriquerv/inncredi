<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str as Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'slug' => 'administador',
			'name' => 'Administador',
			'permissions' => array('admin' => 1),
		]);

		$admins = [
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Enrique',
				'last_name' 	=> 'Rodriguez',
				'email' 		=> 'erodriguez@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Carlos',
				'last_name' 	=> 'Avila',
				'email' 		=> 'cavila@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Rosalba',
				'last_name' 	=> 'Pastora',
				'email' 		=> 'rrodriguez@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Jessica',
				'last_name' 	=> 'Avila',
				'email' 		=> 'javila@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Brit',
				'last_name' 	=> 'Montes de Oca',
				'email' 		=> 'bmontes@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Eduardo',
				'last_name' 	=> 'Montes de oca',
				'email' 		=> 'emontes@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
			Sentinel::registerAndActivate([
				'first_name' 	=> 'Antonio',
				'last_name' 	=> 'Rodriguez',
				'email' 		=> 'arodriguez@inncredi.com',
				'password' 		=> 'asdasd',
				'role_id' 		=> 1,
			]),
		];

		foreach($admins as $admin) {
			$admin->roles()->attach($adminRole);
		}


		$this->command->info('Admin User created with username *@fabricadesoluciones.com and password asdasd');
    }
}
