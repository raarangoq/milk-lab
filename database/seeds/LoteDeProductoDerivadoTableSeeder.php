<?php

use Illuminate\Database\Seeder;

class LoteDeProductoDerivadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lotes_de_productos_derivados')->insert([
            'numero_de_lote' => 4867,
            'flujo_de_cava' => 1,
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('lotes_de_productos_derivados')->insert([
            'numero_de_lote' => 4868,
            'flujo_de_cava' => 3,
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
    }
}
