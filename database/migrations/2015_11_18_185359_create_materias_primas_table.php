<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasPrimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_primas', function (Blueprint $table) {
            $table->string('nombre', 60);
            $table->enum('tipo', ['Comestible', 'Empaque']);
            $table->enum('unidad_de_medida', ['Litro', 'Kilo'])->nullable();

            $table->timestamps();

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
        Schema::drop('materias_primas');
    }
}
