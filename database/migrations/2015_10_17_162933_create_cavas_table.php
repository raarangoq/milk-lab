<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cavas', function (Blueprint $table) {
            $table->increments('id', 60);
            $table->enum('tipo', ['Congelamiento', 'Maduración', 'Producto terminado']);
            $table->decimal('temperatura_minima', 6, 3);
            $table->decimal('temperatura_maxima', 6, 3);
            $table->boolean('en_uso')->default(true);
            $table->string('usuario_registrador', 60);

            $table->timestamps();

            //$table->primary('id');
            $table->foreign('usuario_registrador')
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
        Schema::drop('cavas');
    }
}
