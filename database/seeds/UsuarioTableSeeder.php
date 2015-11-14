<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
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

        DB::table('usuarios')->insert([
            'cedula' => 1015215391,
            'correo' => 'omar@unal.edu.co',
            'password' => bcrypt('secret'),
            'nombre' => 'Omar Romero',
            'rol' => 'Técnico operativo',
            'usuario_creador' => 'raarangoq@unal.edu.co',
        ]);

        DB::table('usuarios')->insert([
            'cedula' => 1013875731,
            'correo' => 'uriel@unal.edu.co',
            'password' => bcrypt('secret'),
            'nombre' => 'Uriel Valencia',
            'rol' => 'Profesor',
            'usuario_creador' => 'raarangoq@unal.edu.co',
        ]);
    }
}
