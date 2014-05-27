<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			User::create([
                'username' => 'teste' . $index,
                'password' => Hash::make('teste' . $index),
                'email' => 'teste' . $index . '@users.com',
                'firstname' => 'Teste ' . $index,
                'lastname' => 'User ' . $index,
                'departamento_id' => 1,
                'acesso_id' => 1,
                'enabled' => 1
			]);
		}
	}

}