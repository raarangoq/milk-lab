<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoteDeProductoDerivado extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lotes_de_productos_derivados';

    protected $primaryKey = 'numero_de_lote';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'numero_de_lote',
        'flujo_de_cava',
    ];
}
