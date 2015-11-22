<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosDerivadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productos_derivados', function (Blueprint $table) {
            $table->string('nombre', 60);
            $table->enum('tipo', ['Bebida', 'Dulce', 'Helado', 'Queso']);
            $table->string('descripcion_fisica', 200)->nullable();
            $table->integer('tiempo_de_vencimiento')->unsigned();
            $table->string('instrucciones_de_la_etiqueta', 200)->nullable();
            $table->enum('temperatura_de_almacenamiento', ['Ambiente', 'Refrigeración', 'Congelación']);
            $table->enum('unidad_de_medida', ['Litro', 'Kilo']);

            $table->primary('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos_derivados');
    }
}
