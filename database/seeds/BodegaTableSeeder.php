<?php

use Illuminate\Database\Seeder;

class BodegaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodegas')->insert([
            'codigo' => '52-108',
            'tipo' => 'Reactivo',
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
        DB::table('bodegas')->insert([
            'codigo' => '52-112',
            'tipo' => 'Materia prima',
            'usuario_registrador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
