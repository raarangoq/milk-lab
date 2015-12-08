<?php

use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            'numero_de_programa' => 10456213,
            'nombre' => 'Análisis de bacterias en queso Eda',
            'tipo' => 'Investigación',
            'observaciones' => 'Proyecto a 6 meses',
            'usuario_responsable' => 'raarangoq@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('programas')->insert([
            'numero_de_programa' => 2486713,
            'nombre' => 'Reactivación química en productos congelados',
            'tipo' => 'Extensión',
            'en_ejecucion' => false,
            'observaciones' => '',
            'usuario_responsable' => 'uriel@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
        DB::table('programas')->insert([
            'numero_de_programa' => 0486713,
            'nombre' => 'Ciencias de la leche 1',
            'tipo' => 'Docencia',
            'en_ejecucion' => true,
            'observaciones' => '',
            'usuario_responsable' => 'uriel@unal.edu.co',
            'created_at' => '2015-10-26 18:40:00',
            'updated_at' => '2015-10-26 18:40:00',
        ]);
    }
}
