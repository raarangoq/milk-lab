<?php

namespace App\Http\Controllers;

use App\Models\ProductoDerivado;
use App\Models\Usuario;
use App\Models\Tamano;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;

class ProductoDerivadoControlador extends Controller {

    protected function getRegistrarProductoDerivado() {


        $usuarioRol = Session::get('usuario.rol');
        $usuarioHabilitado = Session::get('usuario.habilitado');
        /*

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
         */
        return view("ProductoDerivado/registrarProductoDerivado");
    }

    protected function getRegistrarProductoDerivadoAJAX(Request $request) {

//NO ES NECESARIO VALIDAR, SE VALIDA DESDE LA VISTA, EN EL SCRIPT DE JQUERY

        $arrayAtributos = json_decode($request['atributosProducto'], true);
        $arrayTamanio = json_decode($request['tamanio'], true);


//1ro guardar producto derivado

        foreach ($arrayAtributos as $producto) {

            $nombreProducto = $producto['nombre'];

            $productoDerivado = new ProductoDerivado;

            $productoDerivado->nombre = $producto['nombre'];
            $productoDerivado->tipo = $producto['tipo'];
            $productoDerivado->descripcion_fisica = $producto['descripcion_fisica'];
            $productoDerivado->tiempo_de_vencimiento = $producto['tiempo_de_vencimiento'];
            $productoDerivado->instrucciones_de_la_etiqueta = $producto['instrucciones_de_la_etiqueta'];
            $productoDerivado->temperatura_de_almacenamiento = $producto['temperatura_de_almacenamiento'];
            $productoDerivado->unidad_de_medida = $producto['unidad_de_medida'];

            $productoDerivado->save();
        }



//2do guardar TAMAÑOS de producto derivado

        foreach ($arrayTamanio as $tamano) {

            $tamano2 = new Tamano;

            $tamano2->cantidad = $tamano['cantidad'];
            $tamano2->tipo = $tamano['tipo'];
            $tamano2->precio = $tamano['precio'];

            $tamano2->producto_derivado = $nombreProducto; //nombre de producto

            $tamano2->save();
        }
    }

    protected function getListarProductoDerivado() {

        $productos_derivados = ProductoDerivado::all();
        $tamanos = Tamano::all();


        $productos_derivados = ProductoDerivado::paginate(2);
        $productos_derivados->setPath('listarProductoDerivado');


        $productos_derivados->setPath('listarProductoDerivado');

        $usuarioHabilitado = Session::get('usuario.habilitado');




        /* if($usuarioHabilitado === 1){

          return view('ProductoDerivado/listarProductoDerivado',compact('productos_derivados','tamanos'));

          }else{
          //$message = $this->usuario->name . ' Zona restringida, no tiene los permisos para acceder a esta funcionalidad';
          // $message = $this->usuario->nombre . 'Zona restringida, no tiene los permisos para acceder a esta funcionalidad';

          //Session::flash('message', $message) ;
          return "Zona restringida, no tiene los permisos para acceder a esta funcionalidad";
          //return redirect('login')->with('success','Zona restringida, no tiene los permisos para acceder a esta funcionalidad');
          } */

        return view('ProductoDerivado/listarProductoDerivado', compact('productos_derivados', 'tamanos'));
    }

    protected function getEditarProductoDerivado(Request $request) {

        $nombre_productoDerivado = $request['producto'];
        $producto_derivadoSeleccionado = ProductoDerivado::where('nombre', $nombre_productoDerivado)->get();
        $producto_derivado = $producto_derivadoSeleccionado[0];

        $tamanios = Tamano::where('producto_derivado', $nombre_productoDerivado)->get();
        $cantidadTamanios = Tamano::where('producto_derivado', $nombre_productoDerivado)->count();


        return view('ProductoDerivado/editarProductoDerivado', compact('producto_derivado', 'tamanios', 'cantidadTamanios'));
    }

    protected function getEditarProductoDerivadoAJAX(Request $request) {

//NO ES NECESARIO VALIDAR, SE VALIDA DESDE LA VISTA, EN EL SCRIPT DE JQUERY

        $arrayAtributos = json_decode($request['atributosProducto'], true);
        $arrayTamanio = json_decode($request['tamanio'], true);


//1ro actualizar producto derivado

        foreach ($arrayAtributos as $producto) {

            $nombreAnterior = $producto['nombreAnterior'];

            $nombre = $producto['nombre'];
            $tipo = $producto['tipo'];
            $descripcion_fisica = $producto['descripcion_fisica'];
            $tiempo_de_vencimiento = $producto['tiempo_de_vencimiento'];
            $instrucciones_de_la_etiqueta = $producto['instrucciones_de_la_etiqueta'];
            $temperatura_de_almacenamiento = $producto['temperatura_de_almacenamiento'];
            $unidad_de_medida = $producto['unidad_de_medida'];


            $productoActualizado = ProductoDerivado::where('nombre', $nombreAnterior)
                    ->update(['nombre' => $nombre,
                'tipo' => $tipo,
                'descripcion_fisica' => $descripcion_fisica,
                'tiempo_de_vencimiento' => $tiempo_de_vencimiento,
                'instrucciones_de_la_etiqueta' => $instrucciones_de_la_etiqueta,
                'temperatura_de_almacenamiento' => $temperatura_de_almacenamiento,
                'unidad_de_medida' => $unidad_de_medida,
            ]);
        }

//return($arrayTamanio);
//2do borrar antiguos TAMAÑOS de producto derivado
        $affectedRows = Tamano::where('producto_derivado', $nombreAnterior)->delete();
        $affectedRows = Tamano::where('producto_derivado', $nombre)->delete();


//3ro agregar nuevos TAMAÑOS de producto derivado


        foreach ($arrayTamanio as $tamano) {

            if (empty($tamano)) {
//SI LA VARIABLE ESTA VACIA NO HACER NADA
            } else {

                $tamano2 = new Tamano;

                $tamano2->cantidad = $tamano['cantidad'];
                $tamano2->tipo = $tamano['tipo'];
                $tamano2->precio = $tamano['precio'];

                $tamano2->producto_derivado = $nombre; //nombre de producto

                $tamano2->save();
            }
        }
    }

}

/*FUNCIONES ANTERIORES

  protected function postRegistrarProductoDerivado(Request $request){

    $this->validate($request,[

        'nombre'=>'required',
        'tipo'=>'required',

        'tiempo_de_vencimiento'=>'required',
       
        'temperatura_de_almacenamiento'=>'required',
        'unidad_de_medida'=>'required',
        //tabla tamanio
        'cantidad'=>'required',
        'tipo'=>'required',
        'precio'=>'required',  
    
          
      ]);
                $productoDerivado = new ProductoDerivado;

                $productoDerivado->nombre = $request['nombre'];
                $productoDerivado->tipo = $request['tipo'];
                $productoDerivado->descripcion_fisica= $request['descripcion_fisica'];                        $productoDerivado->tiempo_de_vencimiento = $request['tiempo_de_vencimiento'];
                $productoDerivado->instrucciones_de_la_etiqueta = $request['instrucciones_de_la_etiqueta'];
    
     $productoDerivado->temperatura_de_almacenamiento = $request['temperatura_de_almacenamiento']; 
     $productoDerivado->unidad_de_medida = $request['unidad_de_medida']; 
 
               //vector  

                $tamano = new Tamano;

                $tamano->cantidad = $request['cantidad'];
                $tamano->tipo = $request['tipo'];
                $tamano->precio = $request['precio'];
                $tamano->producto_derivado = $request['nombre'];


             if($productoDerivado->save() && $tamano->save()){
            
            
           return redirect('registrarProductoDerivado')->with('success','ProductoDerivado registrada correctamente');

        }

  }




protected function postEditarProductoDerivado(Request $request){


$this->validate($request,[

        'nombre'=>'required',
        'tipo'=>'required',
        'tiempo_de_vencimiento'=>'required', 
        'temperatura_de_almacenamiento'=>'required',
        'unidad_de_medida'=>'required',    
      ]);

$nombreAnterior = $request['nombreAnterior'];




/*

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



*/




