<?php

use Illuminate\Database\Seeder;

class ControlDeCavaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('control_de_cavas')->insert([
            'cava' => '1',
            'fecha' => '2015-10-26 18:40:00',
            'humedad' => 15.4,
        	'temperatura' => 11.3,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
        DB::table('control_de_cavas')->insert([
            'cava' => '1',
            'fecha' => '2015-10-26 8:43:53',
            'humedad' => 14.9,
        	'temperatura' => 12.0,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
