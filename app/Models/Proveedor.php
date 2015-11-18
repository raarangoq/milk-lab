<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'proveedores';

    protected $primaryKey = 'NIT';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'NIT',
        'nombre',
        'habilitado',
        'direccion',
        'telefono',
        'usuario_registrador'
    ];
}
