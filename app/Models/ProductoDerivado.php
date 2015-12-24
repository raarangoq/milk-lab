<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoDerivado extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos_derivados';
    protected $primaryKey = 'nombre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion_fisica',
        'tiempo_de_vencimiento',
        'instrucciones_de_la_etiqueta',
        'temperatura_de_almacenamiento',
        'unidad_de_medida',
    ];
    public $timestamps = false;

}
