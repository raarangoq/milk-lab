<?php

use Illuminate\Database\Seeder;

class ProductoDerivadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos_derivados')->insert([
            'nombre' => 'Leche condensada',
            'tipo' => 'Dulce',
            'descripcion_fisica' => 'Fabricado mediante centrifugado de la leche',
            'tiempo_de_vencimiento' => 40,
            'instrucciones_de_la_etiqueta' => 'Conservese en un lugar fresco y seco',
            'temperatura_de_almacenamiento' => 'Ambiente',
            'unidad_de_medida' => 'Litro',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('productos_derivados')->insert([
            'nombre' => 'Queso Eda',
            'tipo' => 'Queso',
            'descripcion_fisica' => null,
            'tiempo_de_vencimiento' => 1260,
            'instrucciones_de_la_etiqueta' => null,
            'temperatura_de_almacenamiento' => 'Refrigeración',
            'unidad_de_medida' => 'Kilo',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
    }
}
