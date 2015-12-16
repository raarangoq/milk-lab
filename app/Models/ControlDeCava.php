<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlDeCava extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'control_de_cavas';
    protected $primaryKey = ['cava', 'fecha'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cava',
        'fecha',
        'humedad',
        'temperatura',
        'usuario_realizador'
    ];

}
