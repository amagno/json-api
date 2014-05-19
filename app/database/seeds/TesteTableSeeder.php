<?php


class TesteTableSeeder extends Seeder {

	public function run()
	{
        /**
         *
         * Defina quantidade de registros teste
         *
         */
        $qtde = 10;

        $testes = array();

        for($i = 0; $i < $qtde; $i++){
            $testes['nome'] = 'Teste N ' . $i;
            $testes['sobrenome'] = 'Sobrenome ' . $i;
            $testes['idade'] = ($i + 10);

            Teste::create($testes);

            $this->command->info('Teste N ' . $i . ' adicionado com sucesso!' );
        }
	}

}