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
            'id' => 1,
            'tipo' => 'Maduración',
            'temperatura_minima' => -1.75,
        	'temperatura_maxima' => 12.00,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00'
        ]);
        DB::table('cavas')->insert([
            'id' => 2,
            'tipo' => 'Congelamiento',
            'temperatura_minima' => -22.75,
            'temperatura_maxima' => -3.00,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00'
        ]);
        DB::table('cavas')->insert([
            'id' => 3,
            'tipo' => 'Producto terminado',
            'temperatura_minima' => 15.8,
            'temperatura_maxima' => 37.6,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00'
        ]); 
    }
}
