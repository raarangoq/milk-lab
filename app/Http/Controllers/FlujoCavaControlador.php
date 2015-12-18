<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\ControlDeCava;
use App\Models\Usuario;
use App\Models\ProductoDerivado;
use App\Models\Programa;
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

class FlujoCavaControlador extends Controller 
{

	protected function getRegistrarFlujoCava(Request $Request)
  	{
  		//traer todas las cavas cuyo valor este en uso
  		//$cavas = Cava::all();
  	
  		//$tamanos= Tamano::all();
      $codigo_cava = $Request['codigo_cava'];
      $productosDerivados= ProductoDerivado::all();
      $usuarios = Usuario::all();
      $programas= Programa::all();
  		
      return view("FlujoCava/registrarFlujoCava",compact('codigo_cava','productosDerivados','usuarios','programas'));
	}
    protected function getRegistrarFlujoCavaAJAX(Request $request) 
    {
        $arrayFlujos = json_decode($request['data'], true);

        foreach ($arrayFlujos as $flujo) {


            $flujoCava = new FlujoDeCava;

            $flujoCava->fecha = $flujo['fecha'];
            $flujoCava->producto_derivado = $flujo['producto_derivado'];
            $flujoCava->tamano =$flujo['tamano'];
            $flujoCava->entra = $flujo['entra'];
            $flujoCava->sale = $flujo['sale'];
            $flujoCava->motivo_de_salida = $flujo['motivo_de_salida'];
            $flujoCava->total = $flujo['total'];
            $flujoCava->existencia = $flujo['existencia'];
            $flujoCava->programa = $flujo['programa'];
            $flujoCava->usuario_responsable = $flujo['responsable'];
            $flujoCava->observaciones = $flujo['observaciones'];
            
            
            $flujoCava->cava = $flujo['cava'];


            $flujoCava->save();
        }

//MENSAJE DE FLUJOS DE BODEGA REGISTRADOS CORRECTAMENTE
    }
  protected function getListarFlujoCava(Request $request)
  {
    $codigo_cava = $request['codigo_cava'];

    $flujo_de_cava = FlujoDeCava::where('cava',$codigo_cava)->get();

    return view('flujoCava/listarFlujoCava',compact('flujo_de_cava','codigo_cava'));
  }

  protected function getEditarFlujoCava(Request $request)
  {
    $codigo_cava =$request['codigo_cava'];
    $id_flujo_cava=$request['id_flujo_cava'];

    $flujo_de_cava = FlujoDeCava::where('cava',$codigo_cava)->get();
    $flujo_de_cava = FlujoDeCava::where('id',$id_flujo_cava)->get();

    $flujo_de_cava = $flujo_de_cava[0];

    $tamanos = Tamano::all();
    $productosDerivados= ProductoDerivado::all();
    $usuarios = Usuario::all();
    $cava = Cava::all();

  }



  


}