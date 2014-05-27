<?php


class DepartamentosTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			Departamento::create(array(
                'nome' => 'Departamento Teste N°: ' . $index
            ));

            $this->command->info('Comando N° ' . $index . ' executado com sucesso!');
		}
	}

}