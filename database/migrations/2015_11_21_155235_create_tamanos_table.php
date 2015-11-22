<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamanos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cantidad', 6, 3);
            $table->enum('tipo', ['Bolsa', 'Pote', 'Vaso', 'Cuarto','Caja', 'Bloque']);
            $table->integer('precio')->unsigned()->nullable();
            $table->string('producto_derivado', 60);

            $table->foreign('producto_derivado')
                ->references('nombre')
                ->on('productos_derivados')
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
        Schema::drop('tamanos');
    }
}
