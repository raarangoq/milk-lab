<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Programa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class ProgramaControlador extends Controller {



     protected function getRegistrarPrograma() {

          $usuarios=Usuario::all();
     
         return view('Programa/registrarPrograma', compact('usuarios'));
      }



      protected function postRegistrarPrograma(Request $request) {

      	
        $this->validate($request, [
            'numero_programa' => 'required',
            'nombre_programa' => 'required',
            'tipo' => 'required',
            'usuario_responsable' => 'required',
        ]);

        

        
        $programa = new Programa;
        $programa->numero_de_programa = $request['numero_programa'];
        $programa->nombre = $request['nombre_programa'];
        $programa->tipo = $request['tipo'];
        $programa->observaciones = $request['observaciones'];
        $programa->usuario_responsable = $request['usuario_responsable'];

       // $usuarioCreador=Session::get('usuario.correo');
        //$cava->usuario_registrador = $usuarioCreador;



          if($programa->save()){
            
            return redirect('listarPrograma')->with('success','Programa registrado correctamente');
        }  

  }


    protected function getListarPrograma() {

      $programas=Programa::all();
      //print_r($cavas);
         return view('Programa/listarPrograma', compact('programas'));
    }


    protected function getEditarPrograma(Request $request) {

      $numero_de_programa= $request['numero_de_programa'];

      $programaSeleccionado=Programa::where('numero_de_programa',$numero_de_programa)->get();
      $programa=$programaSeleccionado[0];

      $usuarios=Usuario::all();

      return view('Programa/editarPrograma', compact('programa','usuarios'));

    }

      protected function postEditarPrograma(Request $request) {

      
        $this->validate($request, [
            'numero_programa' => 'required',
            'nombre_programa' => 'required',
            'tipo' => 'required',
            'usuario_responsable' => 'required',
        ]);


        $anteriorNumero_programa = $request['anteriorNumero_programa'];


        
        $numero_de_programa = $request['numero_programa'];
        $nombre = $request['nombre_programa'];
        $tipo = $request['tipo'];
        $observaciones = $request['observaciones'];
        $usuario_responsable = $request['usuario_responsable'];
        $en_ejecucion=$request['en_ejecucion'];

        //$usuarioEditor = Session::get('usuario.correo');
        

        if($programaActualizado=Programa::where('numero_de_programa',$anteriorNumero_programa)
                        ->update(['numero_de_programa'=>  $numero_de_programa,
                                  'nombre'=>  $nombre,
                                  'observaciones'=>  $observaciones,
                                  'usuario_responsable'=>  $usuario_responsable,
                                  'en_ejecucion'=>  $en_ejecucion,
                                 
                          ])){

 return redirect('listarPrograma')->with('success','programa editado correctamente');

        }else{
return redirect('listarUsuario')->with('error','cava NO editada correctamente');
        }

    }
    
}


