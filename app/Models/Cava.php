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


    //filtros 
    public static function filterAndPaginate($id, $tipo,$en_uso){
        
        return Cava::id($id)
                   ->tipo($tipo)
                   ->en_uso($en_uso)
                   ->paginate();

    }
    public function scopeId($query, $id){

   dd("scope:". $id);

        if(trim($id) != ""){
            
            $query->where('id',$id);
        }
    }
    public function scopeTipo($query, $tipo)
    {
      dd("scope:". $tipo);

      $types = array(

          'types' => [
        ''                  =>'Seleccione un tipo',
       'Congelamiento'      =>'Congelamiento',
       'Maduración'         =>'Maduración',
       'Producto terminado' =>'Producto terminado'
      ]
        );

      if($tipo != "" && isset($types[$tipo]))
      {
        $query->where('tipo',$tipo);
      }

    }

    public function scopeEn_uso($query, $en_uso)
    {
        dd("scope:". $en_uso);
        $en_usos = array(
         'en_usos' => [
         ''   => 'seleccionar uso',
         'SI' =>'1',
         'NO' =>'0'
         ]
            );

        if($en_uso != "" && isset($en_usos[$en_uso]))
        {
           $query->where('en_uso',$en_uso);
        }
    }
    public function scopeTemperatura_minima($query, $temperatura_minima)
    {

    }
    public function scopeTemperatura_maxima($query, $temperatura_maxima)
    {
        
    }



}
