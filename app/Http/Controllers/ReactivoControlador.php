<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class ReactivoControlador extends Controller {



     protected function getRegistrarReactivo() {

          return view('FichaReactivo.registrarFichaReactivo');
      }

     protected function postRegistrarReactivo(Request $request) {

        $nomnbreR = $request['nombre'];
        return $nombreR; 
       
      }


}


