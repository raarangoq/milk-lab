<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlujosDeBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujos_de_bodegas', function (Blueprint $table) {
            $table->integer('id')->increments();
            $table->dateTime('fecha');
            $table->integer('entra')->unsigned();
            $table->integer('sale')->unsigned();
            $table->integer('total')->unsigned();
            $table->integer('existencia')->unsigned();
            $table->enum('motivo_de_salida', ['Producción', 'Descarte'])->nullable();
            $table->string('observaciones', 200)->nullable();
            $table->string('materia_prima', 60);
            $table->integer('programa')->unsigned()->nullable();
            $table->string('usuario_responsable', 60);
            $table->string('bodega', 20);

            $table->timestamps();

            $table->primary('id');

            $table->foreign('materia_prima')
                ->references('nombre')
                ->on('materias_primas')
                ->onUpdate('cascade');

            $table->foreign('programa')
                ->references('numero_de_programa')
                ->on('programas')
                ->onUpdate('cascade'); 

            $table->foreign('usuario_responsable')
                ->references('correo')
                ->on('usuarios')
                ->onUpdate('cascade');   

            $table->foreign('bodega')
                ->references('codigo')
                ->on('bodegas')
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
        Schema::drop('flujos_de_bodegas');
    }
}
