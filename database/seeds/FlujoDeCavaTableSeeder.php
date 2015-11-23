<?php

use Illuminate\Database\Seeder;

class FlujoDeCavaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flujos_de_cavas')->insert([
            'id' => 1,
            'fecha' => '2015-10-26 18:40:00',
            'entra' => 200,
            'sale' => 0,
            'total' => 0,
            'existencia' => 200,
            'motivo_de_salida' => null,
            'observaciones' => 'Llegó un poco mas espesa de lo normal, pero nada de qué procuparse',
            'producto_derivado' => 'Leche condensada',
            'tamano' => 1,
            'programa' => null,
            'usuario_responsable' => 'omar@unal.edu.co',
            'cava' => 2,
        ]);
        DB::table('flujos_de_cavas')->insert([
            'id' => 2,
            'fecha' => '2015-11-08 9:28:00',
            'entra' => 0,
            'sale' => 50,
            'total' => 200,
            'existencia' => 150,
            'motivo_de_salida' => 'Venta',
            'observaciones' => null,
            'producto_derivado' => 'Leche condensada',
            'tamano' => 1,
            'programa' => null,
            'usuario_responsable' => 'omar@unal.edu.co',
            'cava' => 2,
        ]);
        DB::table('flujos_de_cavas')->insert([
            'id' => 3,
            'fecha' => '2015-11-08 17:43:00',
            'entra' => 78,
            'sale' => 0,
            'total' => 0,
            'existencia' => 78,
            'motivo_de_salida' => null,
            'observaciones' => null,
            'producto_derivado' => 'Queso Eda',
            'tamano' => null,
            'programa' => 0486713,
            'usuario_responsable' => 'uriel@unal.edu.co',
            'cava' => 1,
        ]);
        DB::table('flujos_de_cavas')->insert([
            'id' => 4,
            'fecha' => '2015-11-10 17:43:00',
            'entra' => 0,
            'sale' => 28,
            'total' => 78,
            'existencia' => 50,
            'motivo_de_salida' => 'Reprocesado',
            'observaciones' => 'La idea es convertirlo en queso fundido',
            'producto_derivado' => 'Queso Eda',
            'tamano' => null,
            'programa' => 0486713,
            'usuario_responsable' => 'uriel@unal.edu.co',
            'cava' => 1,
        ]);
    }
}
