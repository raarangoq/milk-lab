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
        ]);
        DB::table('programas')->insert([
            'numero_de_programa' => 2486713,
            'nombre' => 'Reactivación química en productos congelados',
            'tipo' => 'Investigación',
            'en_ejecucion' => false,
            'observaciones' => '',
            'usuario_responsable' => 'uriel@unal.edu.co',
        ]);
    }
}
