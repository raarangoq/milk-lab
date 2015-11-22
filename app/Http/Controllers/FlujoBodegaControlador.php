<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\MateriaPrima;
use App\Models\Programa;
use App\Models\Usuario;
use App\Models\FlujoDeBodega;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Session;
use Input;

use Illuminate\Database\Eloquent\Builder;

class FlujoBodegaControlador extends Controller  {

    protected function getRegistrarFlujoBodega() {

    	$materiasPrimas=MateriaPrima::all();
    	$programas=Programa::all();
    	$usuarios=Usuario::all();
      

        return view("FlujoBodega/registrarFlujoBodega", compact('materiasPrimas','programas','usuarios'));
    }



    protected function getRegistrarFlujoBodega2(Request $request) {




//$flujoBodega->fecha;



 $arrayFlujos = json_decode($request['data'],true);

 foreach ($arrayFlujos as $flujo) {


$flujoBodega=new FlujoDeBodega;

$flujoBodega->fecha=$flujo['fecha'];
$flujoBodega->materia_prima=$flujo['materia'];
$flujoBodega->entra=$flujo['entra'];
$flujoBodega->sale=$flujo['sale'];
$flujoBodega->motivo_de_salida=$flujo['motivo_de_salida'];
$flujoBodega->total=$flujo['total'];
$flujoBodega->existencia=$flujo['existencia'];
$flujoBodega->observaciones=$flujo['observaciones'];
$flujoBodega->programa=$flujo['programa'];
$flujoBodega->usuario_responsable=$flujo['responsable'];
$flujoBodega->bodega="123";


$flujoBodega->save();


}

//MENSAJE DE FLUJOS DE BODEGA REGISTRADOS CORRECTAMENTE


//return redirect('registrarFlujoBodega')->with('success','flujos de bodega registrados correctamente');

    }


    protected function getEditarFlujoBodega(Request $request) {

//1.obtener bodega del flujo
//2.obtener id del flujo de bodega
//3.buscar flujo de bodega
//4.enviar flujo de bodega a vista de editar flujo de bodega


    	$materiasPrimas=MateriaPrima::all();
    	$programas=Programa::all();
    	$usuarios=Usuario::all();
      

        return view("FlujoBodega/editarFlujoBodega", compact('materiasPrimas','programas','usuarios'));



/*
      $id_cava= $request['id'];

      $cavaSeleccionado=Cava::where('id',$id_cava)->get();
      $cava=$cavaSeleccionado[0];

      return view('Cava/editarCava', compact('cava'));
 */     

    }
   


    protected function getListarFlujoBodega() {

     // $cavas=Cava::all();
      //print_r($cavas);
   $flujos_de_bodega=FlujoDeBodega::where('bodega',"123")->get();

 return view('FlujoBodega/listarFlujoBodega', compact('flujos_de_bodega'));


    }



}


