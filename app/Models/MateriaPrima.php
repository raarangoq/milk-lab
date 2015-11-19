<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'materias_primas';

    protected $primaryKey = 'nombre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
    	'nombre', 
    	'tipo', 
    	'unidad_de_medida',
    ];
}
