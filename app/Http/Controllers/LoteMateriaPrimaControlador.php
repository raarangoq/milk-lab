<?php

namespace App\Http\Controllers;

use App\Models\ProductoDerivado;
use App\Models\Usuario;
use App\Models\Tamano;
use App\Models\Bodega;
use App\Models\Programa;
use App\Models\materiaPrima;
use App\Models\Proveedor;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;

class LoteMateriaPrimaControlador extends Controller {

    protected function getRegistrarLoteMateriaPrima(Request $request) {


        $nombreMateriaPrima = $request['nombre'];

        $materiaPrima = materiaPrima::where('nombre',$nombreMateriaPrima)->get();
        $materiaPrima =  $materiaPrima[0];

        $proveedores = Proveedor::all();
        $usuarios = Usuario::all();  
        $bodegas = Bodega::all();
        
        
        return view("LoteMateriaPrima/registrarLoteMateriaPrima", compact('nombreMateriaPrima','materiaPrima','proveedores','usuarios','bodegas'));
    }



    
      



















   }




