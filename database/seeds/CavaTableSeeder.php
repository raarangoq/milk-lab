<?php

use Illuminate\Database\Seeder;

class CavaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cavas')->insert([
            'nombre' => 'Maduración 1',
            'tipo' => 'Maduración',
            'temperatura_minima' => -12.75,
        	'temperatura_maxima' => 3.00,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
