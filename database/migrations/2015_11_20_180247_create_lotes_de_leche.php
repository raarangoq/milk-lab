<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesDeLeche extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_de_leche', function (Blueprint $table) {
            $table->integer('remision')->unsigned();

            $table->integer('lote_de_materia_prima')->unsigned();

            $table->timestamps();

            $table->primary('lote_de_materia_prima');

            $table->foreign('lote_de_materia_prima')
                ->references('orden_de_compra')
                ->on('lotes_de_materia_prima')
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
        Schema::drop('lotes_de_leche');
    }
}
