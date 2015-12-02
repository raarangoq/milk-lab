<?php

namespace App\Http\Controllers;

use App\Models\MateriaPrima;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class MateriaPrimaControlador extends Controller {

    protected function getRegistrarMateriaPrima() {

        return view("MateriaPrima/registrarMateriaPrima");
    }

    protected function postRegistrarMateriaPrima(Request $request) {
        $this->validate($request, [
            'tipo' => 'required',
            'nombre' => 'required',
            'unidad_de_medida' => 'required',
        ]);

      
        $materiaPrima = new MateriaPrima;
        $materiaPrima->tipo = $request['tipo'];
        $materiaPrima->nombre = $request['nombre'];
        $materiaPrima->unidad_de_medida = $request['unidad_de_medida'];

          if($materiaPrima->save()){
            
            return redirect('listarMateriaPrima')->with('success','Materia prima registrada correctamente');
        }


  }

    protected function getListarMateriaPrima() {

      $materiasPrimas=MateriaPrima::all();
     $materiasPrimas= MateriaPrima::paginate(10);
     $materiasPrimas->setPath('listarMateriaPrima');

      return view('MateriaPrima/listarMateriaPrima', compact('materiasPrimas'));
    }


    protected function getEditarMateriaPrima(Request $request) {

    $nombre= $request['nombre'];


      $materiaPrimaSeleccionada=MateriaPrima::where('nombre',$nombre)->get();
      $materiaPrima=$materiaPrimaSeleccionada[0];

      return view('MateriaPrima/editarMateriaPrima', compact('materiaPrima'));


    }

   
      protected function postEditarMateriaPrima(Request $request) {

      
        $this->validate($request, [
            'tipo' => 'required',
            'nombre' => 'required',
            'unidad_de_medida' => 'required',
        ]);


        $nombreAnterior= $request['nombreAnterior'];

        $nuevoNombre = $request['nombre'];
        $nuevoTipo = $request['tipo'];
        $nuevoUnidad_de_medida = $request['unidad_de_medida'];
        

        if($materiaPrimaActualizada=MateriaPrima::where('nombre',$nombreAnterior)
                        ->update(['nombre'=>  $nuevoNombre,
                                  'tipo'=>  $nuevoTipo,
                                  'unidad_de_medida'=>  $nuevoUnidad_de_medida,                               
                          ])){

 return redirect('listarMateriaPrima')->with('success','materia prima editada correctamente');

        }else{
return redirect('listarUsuario')->with('error','cava NO editada correctamente');
        }

    }


   

}


