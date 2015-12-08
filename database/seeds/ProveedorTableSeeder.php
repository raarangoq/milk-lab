<?php

use Illuminate\Database\Seeder;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'NIT' => 10456213,
            'nombre' => 'CEAGRO',
            'habilitado' => true,
            'direccion' => 'Cra 23 cl 32',
            'telefono' => 1234567,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('proveedores')->insert([
            'NIT' => 10497873,
            'nombre' => 'ORALÁ',
            'habilitado' => true,
            'direccion' => 'Cra 89 cl 28',
            'telefono' => 1239867,
            'usuario_registrador' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
        ]);
    }
}
