<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlDeCavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_de_cavas', function (Blueprint $table) {
            $table->integer('cava')->unsigned();
            $table->dateTime('fecha');
            // de 0 a 100, un porcentaje
            $table->double('humedad', 6, 3);
            $table->decimal('temperatura', 6, 3);
            $table->string('usuario_registrador', 60);

            $table->primary('fecha', 'cava');

            $table->foreign('cava')
                ->references('codigo')
                ->on('cavas');
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
        Schema::drop('control_de_cavas');
    }
}
