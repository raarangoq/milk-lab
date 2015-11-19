<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'programas';

    protected $primaryKey = 'numero_de_programa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'numero_de_programa', 
    	'nombre', 
    	'tipo', 
    	'en_ejecucion',
    	'observaciones',
    	'usuario_responsable',
    ];
}
