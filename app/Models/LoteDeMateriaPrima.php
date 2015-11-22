<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoteDeMateriaPrima extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lotes_de_materia_prima';

    protected $primaryKey = ['orden_de_compra'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'orden_de_compra',
        'fecha_de_vencimiento',
        'numero_ficha_tecnica',
        'flujo_de_bodega',
        'proveedor'
    ];
}
