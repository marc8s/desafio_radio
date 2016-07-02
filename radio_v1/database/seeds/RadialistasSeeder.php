<?php

use Illuminate\Database\Seeder;

class RadialistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $radialistas = [
			0 => [
				'nome' => 'Manoel Carlos'				
			],
			1 => [
				'nome' => 'Yves Laurent'				
			],
			2 => [
				'nome' => 'Cassio Silveira'
			]
						
		];
        DB::table('radialistas')->insert($radialistas);	
    }
}
