<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesDeProductosDerivadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_de_productos_derivados', function (Blueprint $table) {
            $table->integer('numero_de_lote')->unsigned();
            $table->integer('flujo_de_cava')->unsigned();

            $table->timestamps();

            $table->primary('numero_de_lote');
            $table->unique('flujo_de_cava');

            $table->foreign('flujo_de_cava')
                ->references('id')
                ->on('flujos_de_cavas')
                ->onUpdate('cascade')
                ->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('lotes_de_productos_derivados');
    }
}
