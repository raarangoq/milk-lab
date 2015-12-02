<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlujoDeCava extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flujos_de_cavas';

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
        'producto_derivado',
        'tamano',
        'programa',
        'usuario_responsable',
        'cava,
    ];
}
