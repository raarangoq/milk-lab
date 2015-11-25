<?php

namespace App\Http\Controllers;

use App\Models\ProductoDerivado;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;

class ProductoDerivadoControlador extends Controller {

	protected function getRegistrarProductoDerivado(){


         $usuarioRol = Session::get('usuario.rol');
         $usuarioHabilitado = Session::get('usuario.habilitado');
         

         if($usuarioRol == 'Director'){

           if($usuarioHabilitado == 1){

              return view("ProductoDerivado/registrarProductoDerivado");
             }else{
              //$message = $this->usuario->name . ' Zona restringida, no tiene los permisos para acceder a esta funcionalidad';
      $message = $this->usuario->nombre . 'Zona restringida, no tiene los permisos para acceder a esta funcionalidad';

              Session::flash('message', $message) ;
              return redirect('home');
                   //return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
                }
         }else{

          
    return "Zona restringida, no tiene los permisos para acceder a esta funcionalidad";
         // return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
         }


		
	}
	protected function postRegistrarProductoDerivado(Request $request){

		$this->validate($request,[

	    	'nombre'=>'required',
        'tipo'=>'required',

        'tiempo_de_vencimiento'=>'required',
       
        'temperatura_de_almacenamiento'=>'required',
        'unidad_de_medida'=>'required',
    
          
			]);
                $productoDerivado = new ProductoDerivado;

                $productoDerivado->nombre = $request['nombre'];
                $productoDerivado->tipo = $request['tipo'];
                $productoDerivado->descripcion_fisica= $request['descripcion_fisica'];       $productoDerivado->tiempo_de_vencimiento = $request['tiempo_de_vencimiento'];
                $productoDerivado->instrucciones_de_la_etiqueta = $request['instrucciones_de_la_etiqueta'];
    
     $productoDerivado->temperatura_de_almacenamiento = $request['temperatura_de_almacenamiento']; 
     $productoDerivado->unidad_de_medida = $request['unidad_de_medida']; 

      // return print_r($productoDerivado);

             if($productoDerivado->save()){
            
            
           return redirect('registrarProductoDerivado')->with('success','ProductoDerivado registrada correctamente');

        }

	}

	protected function getListarProductoDerivado(){

      $productoDerivado=ProductoDerivado::all();
              

		return view('ProductoDerivado/listarProductoDerivado',compact('productoDerivado'));
	}

	protected function getEditarProductoDerivado(){
 
       return view("ProductoDerivado/editarProductoDerivado");
	}

	protected function postEditarProductoDerivado(){

		$this->validate($request,[

		'nombre'=>'required',
        'tipo'=>'required',
        
        'tiempo_de_vencimiento'=>'required',
        
        'temperatura_de_almacenamiento'=>'required',
        'unidad_de_medida'=>'required',

			]);

		  $nombreAnterior= $request['nombreAnterior'];
          
            $nuevonombre = $request['nombre'];
               $nuevotipo = $request['tipo'];
                $nuevadescripcion_fisica = $request['descripcion_fisica']; 
                $nuevotiempo_de_vencimiento = $request['tiempo_de_vencimiento'];
              $nuevainstrucciones_de_la_etiqueta = $request['instrucciones_de_la_etiqueta']; 
             $nuevatemperatura_de_almacenamiento = $request['temperatura_de_almacenamiento'];$nuevaunidad_de_medida = $request['unidad_de_medida']; 

                 if($productoDerivadoActualizada=ProductoDerivado::where('nombre',$nombreAnterior)
                        ->update(['nombre'=>  $nuevoNombre,
                                  'tipo'=>  $nuevoTipo,
                                   'descripcion_fisica'=>$nuevadescripcion_fisica,
        'tiempo_de_vencimiento'=>$nuevotiempo_de_vencimiento,
        'instrucciones_de_la_etiqueta'=>$nuevainstrucciones_de_la_etiqueta,
        'temperatura_de_almacenamiento'=>$nuevatemperatura_de_almacenamiento,
        'unidad_de_medida'=>  $nuevoUnidad_de_medida,                               
                          ])){

 return redirect('listarProductoDerivado')->with('success','producto derivado editado correctamente');

        }


	}



}
