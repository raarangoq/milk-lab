<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bodegas';

    protected $primaryKey = 'codigo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'codigo', 
    	'tipo', 
    	'en_uso', 
    	'usuario_registrador'
    ];
}
