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
            //'id' => 'Maduración 1',
            'tipo' => 'Maduración',
            'temperatura_minima' => -1.75,
        	'temperatura_maxima' => 12.00,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
        DB::table('cavas')->insert([
            //'id' => 'Maduración 1',
            'tipo' => 'Congelamiento',
            'temperatura_minima' => -22.75,
            'temperatura_maxima' => -3.00,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
