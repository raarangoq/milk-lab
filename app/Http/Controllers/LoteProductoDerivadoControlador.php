<?php

namespace App\Http\Controllers;

use App\Models\ProductoDerivado;
use App\Models\Usuario;
use App\Models\Tamano;
use App\Models\Cava;
use App\Models\Programa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;
//use LoteDeProductoDerivado;

class LoteProductoDerivadoControlador extends Controller {



    //FUNCION CONOCIDO EL NOMBRE DE PRODUCTO
    protected function getRegistrarLoteProductoDerivado(Request $request) {
      //1.tamanos
      //2.responsables(usuarios)
      //3.cavas
      //4.programas

        $nombreProducto = $request['nombreProducto'];


        $producto = ProductoDerivado::where('nombre',$nombreProducto)->get();
        $producto =  $producto[0];

        $tamanos = Tamano::where('producto_derivado',$nombreProducto)->get();
        $usuarios = Usuario::all();  
        $cavas = Cava::all();
        $programas = Programa::all();
        
        return view("LoteProductoDerivado/registrarLoteProductoDerivado", compact('nombreProducto','producto','tamanos','usuarios','cavas','programas'));
    }



    
        protected function getListarLoteProductoDerivado(Request $request) {

        $productos_derivados=ProductoDerivado::all();
        return view("LoteProductoDerivado/listarLoteProductoDerivado",compact('productos_derivados'));
    }
























   }




