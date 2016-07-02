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
				'descricao' => 'O que você precisa saber pra começar o seu dia.',
				'radialista' => 'Adnoel San'
			],
			1 => [
				'nome' => 'Receitas da Ana',
				'descricao' => 'Ótimas receitas para o seu almoço.',
				'radialista' => 'Ric Detox'
			],
			2 => [
				'nome' => 'Bate bola',
				'descricao' => 'Esportes.',
				'radialista' => 'Adnoel San'
			]
						
		];
        DB::table('programas')->insert($programas);	
		
    }
}
