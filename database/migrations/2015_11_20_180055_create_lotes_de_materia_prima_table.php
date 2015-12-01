<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesDeMateriaPrimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_de_materia_prima', function (Blueprint $table) {
            $table->integer('orden_de_compra')->unsigned();
            $table->dateTime('fecha_de_vencimiento')->nullable();
            $table->integer('numero_ficha_tecnica')->unsigned()->nullable();

            $table->integer('flujo_de_bodega')->unsigned();
            $table->integer('proveedor')->unsigned();

            $table->timestamps();

            $table->primary('orden_de_compra');
            $table->unique('flujo_de_bodega');


            $table->foreign('flujo_de_bodega')
                ->references('id')
                ->on('flujos_de_bodegas')
                ->onUpdate('cascade')
                ->onDelete('cascade');   

            $table->foreign('proveedor')
                ->references('NIT')
                ->on('proveedores')
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
        Schema::drop('lotes_de_materia_prima');
    }
}
