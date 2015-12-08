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
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('bodegas')->insert([
            'codigo' => '52-112',
            'tipo' => 'Materia prima',
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
    }
}
