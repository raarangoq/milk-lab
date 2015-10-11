<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('cedula')->unsigned();
            $table->string('correo', 60);
            $table->string('password', 60);
            $table->string('nombre', 60);
            $table->enum('rol', ['Director', 'Estudiante', 'Microbiólogo', 'Operario', 'Profesor', 'Técnico operativo']);
            $table->boolean('habilitado')->default(true);

            $table->string('usuario_creador', 60);
            $table->string('usuario_editor', 60)->nullable();
            
            $table->rememberToken();
            $table->timestamps();

            $table->primary('correo');

            $table->unique('cedula');

            $table->foreign('usuario_creador')
                ->references('correo')
                ->on('usuarios');
            $table->foreign('usuario_editor')
                ->references('correo')
                ->on('usuarios');

            


            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
