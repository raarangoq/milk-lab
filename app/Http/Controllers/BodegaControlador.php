<?php

namespace App\Http\Controllers;


use App\Models\Bodega;
use App\Models\Usuario;
use App\Models\MateriaPrima;
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

         $usuarioRol = Session::get('usuario.rol');
         $usuarioHabilitado = Session::get('usuario.habilitado');
         

         if($usuarioRol == 'Director'){

           if($usuarioHabilitado == 1){

               return view("Bodega/registrarBodega");
             }else{
              return "Zona restringida, no tiene los permisos para acceder a esta funcionalidad";
                   //return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
                }
         }else{

          
      return "Zona restringida, no tiene los permisos para acceder a esta funcionalidad";
          //return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
         }
            
       
      }
      protected function postRegistrarBodega(Request $request){

            $this->validate($request, [
            'codigo'    => 'required',
            'tipo'      => 'required',            
             ]);                 
      
            $bodega = new Bodega;
            $bodega->codigo = $request['codigo'];
            $bodega->tipo = $request['tipo'];
         
            $usuarioCreador=Session::get('usuario.correo');
            $bodega->usuario_registrador = $usuarioCreador;
          

             if ($bodega->save())
                 
                return redirect('registrarBodega')->with('success','Bodega registrada correctamente');
                   	
      }

      protected function getEditarBodega(Request $request) {

         $codigo_bodega= $request['codigo'];

      $bodegaSeleccionado=Bodega::where('codigo',$codigo_bodega)->get();
      $bodega=$bodegaSeleccionado[0];

      return view('Bodega/editarBodega', compact('bodega'));

        
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
      
     return view('Bodega/listarBodega', compact('bodegas'));
    }

    protected function getRegistrarFlujoBodega(){

      
         $usuarioHabilitado = Session::get('usuario.habilitado');
         $bodegas=Bodega::all();

           if($usuarioHabilitado === 1){

               return view('Bodega/registrarFlujoBodega',compact('bodegas'));
             }else{
              return "Zona restringida, no tiene los permisos para acceder a esta funcionalidad";
                   //return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
                }
               
    }
    protected function postRegistrarFlujoBodega(){

      $this->validate($request, [
            'codigo'    => 'required',
            'tipo'      => 'required',
            'en_uso'    => 'required',
            
             ]);




    }



}


