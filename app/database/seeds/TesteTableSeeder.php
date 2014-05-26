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

        $teste = array();

        for($i = 0; $i < $qtde; $i++){
            $teste['nome'] = 'Teste N ' . $i;
            $teste['sobrenome'] = 'Sobrenome ' . $i;
            $teste['idade'] = ($i + 10);
            $teste['email'] = 'testemail' . $i . '@teste.com';
            Teste::create($teste);

            $this->command->info('Teste N ' . $i . ' adicionado com sucesso!' );
        }
	}

}