<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlujosDeCavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujos_de_cavas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->integer('entra')->unsigned();
            $table->integer('sale')->unsigned();
            $table->integer('total')->unsigned();
            $table->integer('existencia')->unsigned();
            $table->enum('motivo_de_salida', ['Venta', 'Evaluación sensorial', 'Reprocesado', 'Descarte'])->nullable();
            $table->string('observaciones', 200)->nullable();

            $table->string('producto_derivado', 60);
            $table->integer('tamano')->unsigned()->nullable();
            $table->integer('programa')->unsigned()->nullable();
            $table->string('usuario_responsable', 60);
            $table->integer('cava')->unsigned();
            

            $table->timestamps();

            $table->foreign('producto_derivado')
                ->references('nombre')
                ->on('productos_derivados')
                ->onUpdate('cascade');

            $table->foreign('programa')
                ->references('numero_de_programa')
                ->on('programas')
                ->onUpdate('cascade'); 

            $table->foreign('tamano')
                ->references('id')
                ->on('tamanos')
                ->onUpdate('cascade');     

            $table->foreign('usuario_responsable')
                ->references('correo')
                ->on('usuarios')
                ->onUpdate('cascade');   

            $table->foreign('cava')
                ->references('id')
                ->on('cavas')
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
        Schema::drop('flujos_de_cavas');
    }
}
