<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->string('codigo', 20);
            $table->enum('tipo', ['Reactivo', 'Materia prima']);
            $table->boolean('en_uso')->default(true);
            $table->string('usuario_registrador', 60);

            $table->timestamps();

            $table->primary('codigo');
            $table->foreign('usuario_registrador')
                ->references('correo')
                ->on('usuarios')
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
        Schema::drop('bodegas');
    }
}
