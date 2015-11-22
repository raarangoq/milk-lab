<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->integer('numero_de_programa')->unsigned();
            $table->string('nombre', 60);
            $table->enum('tipo', ['Investigación', 'Extensión', 'Docencia']);
            $table->boolean('en_ejecucion')->default(true);
            $table->string('observaciones', 200)->nullable();
            $table->string('usuario_responsable', 60);

            $table->timestamps();

            $table->primary('numero_de_programa');
            $table->foreign('usuario_responsable')
                ->references('correo')
                ->on('usuarios')
                ->onUpdate('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programas');
    }
}
