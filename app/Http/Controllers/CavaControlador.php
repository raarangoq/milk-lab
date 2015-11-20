<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class CavaControlador extends Controller {

    protected function getRegistrarCava() {

        return view("Cava/registrarCava");
    }
  
  

      protected function postRegistrarCava(Request $request) {

        $this->validate($request, [
            'tipo' => 'required',
            'temperatura_minima' => 'required',
            'temperatura_maxima' => 'required',
        ]);

        if($request['temperatura_minima'] <= $request['temperatura_maxima'] ){

        $cava = new Cava;
        $cava->tipo = $request['tipo'];
        $cava->temperatura_minima = $request['temperatura_minima'];
        $cava->temperatura_maxima = $request['temperatura_maxima'];

        $usuarioCreador=Session::get('usuario.correo');
        $cava->usuario_registrador = $usuarioCreador;

          if($cava->save()){
            
            return redirect('registrarCava')->with('success','Cava registrada correctamente');
        }

      }else{
      	return redirect('registrarCava')->with('error','error en teperatura minima y maxima');
      }
  }



    protected function getListarCava() {

      $cavas=Cava::all();
      //print_r($cavas);
     return view('Cava/listarCava', compact('cavas'));
    }

    protected function getEditarCava(Request $request) {

      $id_cava= $request['id'];

      $cavaSeleccionado=Cava::where('id',$id_cava)->get();
      $cava=$cavaSeleccionado[0];

      return view('Cava/editarCava', compact('cava'));

    }

    protected function postEditarCava(Request $request) {

      
      $this->validate($request, [
            'id' => 'required',
            'tipo' => 'required',
            'temperatura_minima' => 'required',
            'temperatura_maxima' => 'required',
            'en_uso' => 'required',
        ]);

        $id= $request['id'];
        $nuevaTemperatura_minima = $request['temperatura_minima'];
        $nuevaTemperatura_maxima = $request['temperatura_maxima'];
        $nuevoTipo = $request['tipo'];
        $nuevoUso = $request['en_uso'];

        //$usuarioEditor = Session::get('usuario.correo');
        

        if($cavaActualizada=Cava::where('id',$id)
                        ->update(['tipo'=>  $nuevoTipo,
                                  'temperatura_minima'=>  $nuevaTemperatura_minima,
                                  'temperatura_maxima'=>  $nuevaTemperatura_maxima,
                                  'en_uso'=>  $nuevoUso,
                                 
                          ])){

 return redirect('listarCava')->with('success','cava editada correctamente');

        }else{
return redirect('listarUsuario')->with('error','cava NO editada correctamente');
        }


  //return $this->getListarUsuario();
//return Redirect::to('listarUsuario');
// return redirect('registrarUsuario')->with('success','usuario registrado correctamente');

    }

    protected function getRegistrarControlCava() {

      //$cavas=Cava::all();
      //print_r($cavas);
     //return view('Cava/listarCava', compact('cavas'));
      return view('Cava/registrarControlCava');
    }
    



}


