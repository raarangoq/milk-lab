<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamano extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tamanos';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'cantidad',
        'tipo',
        'precio',
        'producto_derivado',
    ];
    public $timestamps = false;

}
