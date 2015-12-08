<?php

use Illuminate\Database\Seeder;

class LoteDeMateriaPrimaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lotes_de_materia_prima')->insert([
            'orden_de_compra' => 178387,
            'fecha_de_vencimiento' => null,
            'numero_ficha_tecnica' => 4956723,
            'flujo_de_bodega' => 1,
            'proveedor' => 10497873,
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('lotes_de_materia_prima')->insert([
            'orden_de_compra' => 174887,
            'fecha_de_vencimiento' => '2015-11-16 8:40:00',
            'numero_ficha_tecnica' => 906672,
            'flujo_de_bodega' => 2,
            'proveedor' => 10497873,
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('lotes_de_materia_prima')->insert([
            'orden_de_compra' => 228347,
            'fecha_de_vencimiento' => null,
            'numero_ficha_tecnica' => null,
            'flujo_de_bodega' => 4,
            'proveedor' => 10456213,
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);

    }
}
