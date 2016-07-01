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
				'horario' => '08:00',
				'descricao' => 'O que você precisa saber pra começar o seu dia.',
				'radialista' => 'Adnoel San'
			],
			1 => [
				'nome' => 'Receitas da Ana',
				'horario' => '10:00',
				'descricao' => 'Ótimas receitas para o seu almoço.',
				'radialista' => 'Ric Detox'
			]
						
		];
        DB::table('programas')->insert($programas);	
		
    }
}
