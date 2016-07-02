<?php

use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$programas = [
			0 => [
				'nome' => 'Bom dia, cidade',
				'descricao' => 'O que você precisa saber pra começar o seu dia.'
			],
			1 => [
				'nome' => 'Receitas da Ana',
				'descricao' => 'Ótimas receitas para o seu almoço.'
			],
			2 => [
				'nome' => 'Bate bola',
				'descricao' => 'Esportes.'
			]
						
		];
        DB::table('programas')->insert($programas);	
		
    }
}
