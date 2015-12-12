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
    public static function filterAndPaginate($id, $tipo){
        
        return Cava::id($id)
                   ->tipo($tipo)
                   ->paginate();

    }
    public function scopeId($query, $id){

       // dd("scope:". $id);

        if(trim($id) != ""){
            
            $query->where('id',$id);
        }
    }
    public function scopeTipo($query, $tipo){
       dd("scope:". $tipo);

      $types = array(

          'types' => [
        ''                  =>'Seleccione un tipo',
       'Congelamiento'      =>'Congelamiento',
       'Maduración'         =>'Maduración',
       'Producto terminado' =>'Producto terminado'
    ]
        );

      if($tipo != "" && isset($types[$tipo])){

        $query->where('tipo',$tipo);
      }

    }


}
