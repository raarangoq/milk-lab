<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\ControlDeCava;
use App\Models\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;

class FlujoCavaControlador extends Controller 
{

	protected function getRegistrarFlujoCava(Request $Request)
  	{
  		//traer todas las cavas cuyo valor este en uso
  		//$cavas = Cava::all();
  		//$productosDerivados= ProductoDerivado::all();
  		//$tamanos= Tamano::all();
         $codigoCava = $Request['id']; 
  		
      return view("FlujoCava/registrarFlujoCava",compact('codigoCava'));
	}
}