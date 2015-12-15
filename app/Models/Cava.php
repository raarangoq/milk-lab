<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cava extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cavas';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'tipo',
        'temperatura_minima',
        'temperatura_maxima',
        'en_uso',
        'usuario_registrador'
    ];

}
