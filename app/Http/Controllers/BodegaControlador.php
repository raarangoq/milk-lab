<?php

namespace App\Http\Controllers;


use App\Models\Bodega;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class BodegaControlador extends Controller {



     protected function getRegistrarBodega() {

        return view("Bodega/registrarBodega");
       
      }
      protected function postRegistrarBodega(Request $request){

            $this->validate($request, [
            'codigo'    => 'required',
            'tipo'      => 'required',
            
             ]);

                  

       $auxcodigo = Bodega::where('codigo')->get();

    if( $request['codigo'] != $auxcodigo){
            $bodega = new Bodega;
            $bodega->codigo = $request['codigo'];
            $bodega->tipo = $request['tipo'];
         
            $usuarioCreador=Session::get('usuario.correo');
            $bodega->usuario_creador = $usuarioCreador;
          

             if ( $bodega->save())
                 
                return redirect('registrarBodega')->with('success','Bodega registrada correctamente');
             
      	}else{
               return "error";
        }
      }

      protected function getEditarBodega() {

        return view("Bodega/editarBodega");
        
      }
      protected function postEditarBodega(Request $request){
            
            $this->validate($request, [
            'codigo'    => 'required',
            'tipo'      => 'required',
            'en_uso'    => 'required',
            
             ]);
        $nuevocodigo= $request['codigo'];
        $nuevoTipo = $request['tipo']; 
        $nuevoUso = $request['en_uso'];

        //$usuarioEditor = Session::get('usuario.correo');
        

        if($bodegaActualizada=Bodega::where('codigo',$codigo)
                        ->update(['tipo'=>  $nuevoTipo,
                                  'codigo'=>  $nuevocodigo,
                                  'en_uso'=>  $nuevoUso,
                                 
                          ])){

 return redirect('listarBodega')->with('success','bodega editada correctamente');

        }else{
return redirect('listarBodega')->with('error','bodega NO editada correctamente');
        }

        
      }

  
    protected function getListarBodega() {

    $bodegas=Bodega::all();
      //print_r($cavas);
     return view('Bodega/listarBodega', compact('bodegas'));
    }


}


