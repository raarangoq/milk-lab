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

		return view("ProductoDerivado/RegistrarProductoDerivado");
	}
	protected function postRegistrarProductoDerivado(Request $request){

		$this->validate($request,[

		'nombre'=>'required',
        'tipo'=>'required',
        'descripcion_fisica'=>'required',
        'tiempo_de_vencimiento'=>'required',
        'instrucciones_de_la_etiqueta'=>'required',
        'temperatura_de_almacenamiento'=>'required',
        'unidad_de_medida'=>'required',

			]);

               $productoDerivado = new ProductoDerivado;

                $productoDerivado->nombre = $request['nombre'];
                $productoDerivado->tipo = $request['tipo'];
                $productoDerivado->descripcion_fisica = $request['descripcion_fisica']; 
                $productoDerivado->tiempo_de_vencimiento = $request['tiempo_de_vencimiento'];
                $productoDerivado->instrucciones_de_la_etiqueta = $request['instrucciones_de_la_etiqueta']; 
                $productoDerivado->temperatura_de_almacenamiento = $request['temperatura_de_almacenamiento']; 
                $productoDerivado->unidad_de_medida = $request['unidad_de_medida']; 

	}
}
