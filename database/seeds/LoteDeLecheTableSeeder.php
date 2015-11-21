<?php

use Illuminate\Database\Seeder;

class LoteDeLecheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lotes_de_leche')->insert([
            'remision' =>  496872,
            'lote_de_materia_prima' => 228347,
        ]);
    }
}
