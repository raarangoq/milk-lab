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
            $table->string('nombre', 60);
            $table->enum('tipo', ['Congelamiento', 'Maduración', 'Producto terminado']);
            $table->decimal('temperatura_minima', 6, 3);
            $table->decimal('temperatura_maxima', 6, 3);

            $table->string('usuario_registrador', 60);

            $table->timestamps();

            $table->primary('nombre');
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
