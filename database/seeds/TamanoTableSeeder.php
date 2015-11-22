<?php

use Illuminate\Database\Seeder;

class TamanoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tamanos')->insert([
            'id' => 1,
            'cantidad' => 0.320,
            'tipo' => 'Pote',
            'precio' => 6500,
            'producto_derivado' => 'Leche condensada',
        ]);
        DB::table('tamanos')->insert([
            'id' => 2,
            'cantidad' => 1,
            'tipo' => 'Bolsa',
            'precio' => 15000,
            'producto_derivado' => 'Leche condensada',
        ]);
        DB::table('tamanos')->insert([
            'id' => 3,
            'cantidad' => 0.500,
            'tipo' => 'Bolsa',
            'precio' => 14500,
            'producto_derivado' => 'Queso Eda',
        ]);
        DB::table('tamanos')->insert([
            'id' => 4,
            'cantidad' => 1,
            'tipo' => 'Bolsa',
            'precio' => 28000,
            'producto_derivado' => 'Queso Eda',
        ]);
        DB::table('tamanos')->insert([
            'id' => 5,
            'cantidad' => 5,
            'tipo' => 'Bloque',
            'precio' => 96000,
            'producto_derivado' => 'Queso Eda',
        ]);
    }
}
