<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlujoDeBodega extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flujos_de_bodegas';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
        'fecha',
        'entra',
        'sale',
        'total',
        'existencia',
        'motivo_de_salida',
        'observaciones',
        'materia_prima',
        'programa',
        'usuario_responsable',
        'bodega',
    ];
}
