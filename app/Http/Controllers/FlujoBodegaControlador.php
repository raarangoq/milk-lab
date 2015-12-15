<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\Bodega;
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

class FlujoBodegaControlador extends Controller {

    protected function getRegistrarFlujoBodega(Request $request) {

        $codigo_bodega = $request['codigo_bodega'];


        $materiasPrimas = MateriaPrima::all();
        $programas = Programa::all();
        $usuarios = Usuario::all();


        return view("FlujoBodega/registrarFlujoBodega", compact('materiasPrimas', 'programas', 'usuarios', 'codigo_bodega'));
    }

    protected function getRegistrarFlujoBodegaAJAX(Request $request) {

//NO ES NECESARIO VALIDAR, SE VALIDA DESDE LA VISTA, EN EL SCRIPT DE JQUERY

        $arrayFlujos = json_decode($request['data'], true);

        foreach ($arrayFlujos as $flujo) {


            $flujoBodega = new FlujoDeBodega;

            $flujoBodega->fecha = $flujo['fecha'];
            $flujoBodega->materia_prima = $flujo['materia'];
            $flujoBodega->entra = $flujo['entra'];
            $flujoBodega->sale = $flujo['sale'];
            $flujoBodega->motivo_de_salida = $flujo['motivo_de_salida'];
            $flujoBodega->total = $flujo['total'];
            $flujoBodega->existencia = $flujo['existencia'];
            $flujoBodega->observaciones = $flujo['observaciones'];
            $flujoBodega->programa = $flujo['programa'];
            $flujoBodega->usuario_responsable = $flujo['responsable'];
            $flujoBodega->bodega = $flujo['bodega'];


            $flujoBodega->save();
        }

//MENSAJE DE FLUJOS DE BODEGA REGISTRADOS CORRECTAMENTE
    }

    protected function getEditarFlujoBodega(Request $request) {

//1.obtener bodega del flujo
//2.obtener id del flujo de bodega
//3.buscar flujo de bodega
//4.enviar flujo de bodega a vista de editar flujo de bodega

        $codigo_bodega = $request['codigo_bodega'];
        $id_flujo_bodega = $request['id_flujo_bodega'];

        $flujo_de_bodega = FlujoDeBodega::where('bodega', $codigo_bodega)->get();
        $flujo_de_bodega = FlujoDeBodega::where('id', $id_flujo_bodega)->get();

        $flujo_de_bodega = $flujo_de_bodega[0];


        $materiasPrimas = MateriaPrima::all();
        $programas = Programa::all();
        $usuarios = Usuario::all();
        $bodegas = Bodega::all();


        //INFORMACION ADICIONAL PARA MOSTRAR EN VISTA DE EDITAR FLUJO DE BODEGA
        //1.unidad de medida de tipo de materia prima del flujo de bodega
        //2.nombre de programa del flujo de bodega
        //3.nombre de usuario responsable del flujo de bodega
        //4.rol de usuario responsable del flujo de bodega
        //5.tipo de bodega del flujo de bodega
//1.
        $unidad_medida_materia_prima = MateriaPrima::select('unidad_de_medida')
                ->where('nombre', $flujo_de_bodega->materia_prima)
                ->get();

        $unidad_medida_materia_prima = $unidad_medida_materia_prima[0]->unidad_de_medida;

//2.

        $nombre_de_programa = Programa::select('nombre')
                ->where('numero_de_programa', $flujo_de_bodega->programa)
                ->get();

        $nombre_de_programa = $nombre_de_programa[0]->nombre;

//3.

        $nombre_de_responsable = Usuario::select('nombre')
                ->where('correo', $flujo_de_bodega->usuario_responsable)
                ->get();

        $nombre_de_responsable = $nombre_de_responsable[0]->nombre;

//4.

        $rol_de_responsable = Usuario::select('rol')
                ->where('correo', $flujo_de_bodega->usuario_responsable)
                ->get();

        $rol_de_responsable = $rol_de_responsable[0]->rol;

//5.

        $tipo_bodega = Bodega::select('tipo')
                ->where('codigo', $flujo_de_bodega->bodega)
                ->get();

        $tipo_bodega = $tipo_bodega[0]->tipo;


        $vectorINFO[1] = $unidad_medida_materia_prima;
        $vectorINFO[2] = $nombre_de_programa;
        $vectorINFO[3] = $nombre_de_responsable;
        $vectorINFO[4] = $rol_de_responsable;
        $vectorINFO[5] = $tipo_bodega;

        return view("FlujoBodega/editarFlujoBodega", compact('flujo_de_bodega', 'materiasPrimas', 'programas', 'usuarios', 'bodegas', 'vectorINFO', 'id_flujo_bodega'));
    }

    protected function postEditarFlujoBodega(Request $request) {


        $this->validate($request, [
            'fecha' => 'required',
            'materia_prima' => 'required',
            'entra' => 'required',
            'sale' => 'required',
            'motivo_de_salida' => 'required',
            'total' => 'required',
            'existencia' => 'required',
            'programa' => 'required',
            'usuario_responsable' => 'required',
            'bodega' => 'required',
        ]);
        //observaciones es opcional


        $flujoBodega = new FlujoDeBodega;

        $flujoBodega->id = $request['id_flujo_bodega']; //clave primaria de flujo de bodega

        $flujoBodega->fecha = $request['fecha'];
        $flujoBodega->materia_prima = $request['materia_prima'];
        $flujoBodega->entra = $request['entra'];
        $flujoBodega->sale = $request['sale'];
        $flujoBodega->motivo_de_salida = $request['motivo_de_salida'];
        $flujoBodega->total = $request['total'];
        $flujoBodega->existencia = $request['existencia'];
        $flujoBodega->observaciones = $request['observaciones'];
        $flujoBodega->programa = $request['programa'];
        $flujoBodega->usuario_responsable = $request['usuario_responsable'];
        $flujoBodega->bodega = $request['bodega'];

//return $flujoBodega;

        if ($flujoBodegaActualizado = FlujoDeBodega::where('id', $flujoBodega->id)
                ->update(['fecha' => $flujoBodega->fecha,
            'materia_prima' => $flujoBodega->materia_prima,
            'entra' => $flujoBodega->entra,
            'sale' => $flujoBodega->sale,
            'motivo_de_salida' => $flujoBodega->motivo_de_salida,
            'total' => $flujoBodega->total,
            'existencia' => $flujoBodega->existencia,
            'observaciones' => $flujoBodega->observaciones,
            'programa' => $flujoBodega->programa,
            'usuario_responsable' => $flujoBodega->usuario_responsable,
            'bodega' => $flujoBodega->bodega,
                ])) {

            return redirect("listarFlujoBodega?codigo_bodega=$flujoBodega->bodega")->with('success', 'flujo de bodega editado correctamente');
        } else {
            return redirect('listarUsuario')->with('error', 'flujo de bodega NO editado correctamente');
        }
    }

    protected function getListarFlujoBodega(Request $request) {

        $codigo_bodega = $request['codigo_bodega'];

        $flujos_de_bodega = FlujoDeBodega::where('bodega', $codigo_bodega)->get();

        return view('FlujoBodega/listarFlujoBodega', compact('flujos_de_bodega', 'codigo_bodega'));
    }

    protected function getBorrarFlujoBodega(Request $request) {


        $id_flujo_bodega = $request['id_flujo_bodega'];
        $codigo_bodega = $request['codigo_bodega'];

//$flujo_bodega=FlujoDeBodega::where('id',$id_flujo_bodega)->get();

        $affectedRows = FlujoDeBodega::where('id', $id_flujo_bodega)->delete();

        $paginaAnterior = "listarFlujoBodega?codigo_bodega=$codigo_bodega";

//return $paginaAnterior;

        return redirect($paginaAnterior)->with('success', 'Flujo de bodega borrado correctamente');
    }

}
