<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AcessosTableSeeder extends Seeder {

	public function run()
	{
		Acesso::create(array(
            'nome' => 'Usuário'
        ));
        Acesso::create(array(
            'nome' => 'Coordenardor'
        ));
        Acesso::create(array(
            'nome' => 'Administrador'
        ));
	}

}