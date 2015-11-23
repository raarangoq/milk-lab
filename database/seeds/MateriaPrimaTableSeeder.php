<?php

use Illuminate\Database\Seeder;

class MateriaPrimaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias_primas')->insert([
            'nombre' => 'leche',
            'tipo' => 'Comestible',
            'unidad_de_medida' => 'Litro',
        ]);
        DB::table('materias_primas')->insert([
            'nombre' => 'empaque para queso de 5 libras',
            'tipo' => 'Empaque',
            'unidad_de_medida' => null,
        ]);
        DB::table('materias_primas')->insert([
            'nombre' => 'colorante #56 rojo',
            'tipo' => 'Comestible',
            'unidad_de_medida' => 'Litro',
        ]);
        DB::table('materias_primas')->insert([
            'nombre' => 'azucar blanca extra fina',
            'tipo' => 'Comestible',
            'unidad_de_medida' => 'Kilo',
        ]);;
        DB::table('materias_primas')->insert([
            'nombre' => 'pote para arequipe de 250gr',
            'tipo' => 'Empaque',
            'unidad_de_medida' => null,
        ]);
        DB::table('materias_primas')->insert([
            'nombre' => 'levadura en polvo',
            'tipo' => 'Comestible',
            'unidad_de_medida' => 'Kilo',
        ]);
    }
}
