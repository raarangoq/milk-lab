<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'cedula' => 1017216332,
            'correo' => 'raarangoq@unal.edu.co',
            'password' => bcrypt('secret'),
        	'nombre' => 'Ricardo Antonio Arango Quiroz',
        	'rol' => 'Director',
        	'usuario_creador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
