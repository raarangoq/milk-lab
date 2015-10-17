<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cava extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cavas';

    protected $primaryKey = 'nombre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre', 
    	'tipo', 
    	'temperatura_minima', 
    	'temperatura_maxima', 
    	'en_uso', 
    	'usuario_registrador'
    ];
}
