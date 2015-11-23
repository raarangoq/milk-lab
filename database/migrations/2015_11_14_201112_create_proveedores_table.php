<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->integer('NIT')->unsigned();
            $table->string('nombre', 60);
            $table->boolean('habilitado')->default(true);
            $table->string('direccion', 80)->nullable();
            $table->integer('telefono')->nullable();
            $table->string('usuario_registrador', 60);

            $table->timestamps();

            $table->primary('NIT');
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
        Schema::drop('proveedores');
    }
}
