<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoteDeLeche extends LoteDeMateriaPrima {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lotes_de_leche';
    protected $primaryKey = ['lote_de_materia_prima'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'remision',
        'lote_de_materia_prima'
    ];

}
