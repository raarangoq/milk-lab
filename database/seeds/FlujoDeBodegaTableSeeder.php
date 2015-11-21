<?php

use Illuminate\Database\Seeder;

class FlujoDeBodegaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flujos_de_bodegas')->insert([
            'id' => 1,
            'fecha' => '2015-10-26 18:40:00',
            'entra' => 20,
            'sale' => 0,
            'total' => 0,
            'existencia' => 20,
            'motivo_de_salida' => null,
            'observaciones' => 'Llegó con un poco de retraso',
            'materia_prima' => 'empaque para queso de 5 libras',
            'programa' => null,
            'usuario_responsable' => 'omar@unal.edu.co',
            'bodega' => '52-108',
        ]);
        DB::table('flujos_de_bodegas')->insert([
            'id' => 2,
            'fecha' => '2015-10-28 10:34:00',
            'entra' => 200,
            'sale' => 0,
            'total' => 0,
            'existencia' => 200,
            'motivo_de_salida' => null,
            'observaciones' => null,
            'materia_prima' => 'azucar blanca extra fina',
            'programa' => null,
            'usuario_responsable' => 'omar@unal.edu.co',
            'bodega' => '52-112',
        ]);
        DB::table('flujos_de_bodegas')->insert([
            'id' => 3,
            'fecha' => '2015-10-29 14:05:00',
            'entra' => 0,
            'sale' => 45,
            'total' => 200,
            'existencia' => 155,
            'motivo_de_salida' => 'Producción',
            'observaciones' => null,
            'materia_prima' => 'azucar blanca extra fina',
            'programa' => 2486713,
            'usuario_responsable' => 'uriel@unal.edu.co',
            'bodega' => '52-112',
        ]);
        DB::table('flujos_de_bodegas')->insert([
            'id' => 4,
            'fecha' => '2015-11-22 14:05:00',
            'entra' => 950,
            'sale' => 0,
            'total' => 0,
            'existencia' => 950,
            'motivo_de_salida' => null,
            'observaciones' => null,
            'materia_prima' => 'leche',
            'programa' => null,
            'usuario_responsable' => 'uriel@unal.edu.co',
            'bodega' => '52-112',
        ]);
    }
}
