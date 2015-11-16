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


class BodegaControlador extends Controller {



     protected function getRegistrarBodega() {

        return view("Bodega/registrarBodega");
       
      }
      protected function postRegistrarBodega(Request $request){


      	
      }

      protected function getEditarBodega() {

        return view("Bodega/editarBodega");
        
      }
      protected function postEditarBodega(Request $request){


        
      }

     protected function getAjax() {

      
      }

    protected function getListarBodega() {

     $usuarioSession = Session::get('usuario.correo');
      $usuarios=Usuario::where('correo','!=',$usuarioSession)->get();
     
         return view('Bodega/listarBodega', compact('usuarios'));
    }


}


