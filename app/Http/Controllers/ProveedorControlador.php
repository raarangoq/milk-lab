<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;

class ProveedorControlador extends Controller {

    protected function getRegistrarProveedor() {

        return view("Proveedor/registrarProveedor");
    }

    protected function postRegistrarProveedor(Request $request) {
        $this->validate($request, [
            'NIT' => 'required',
            'nombre' => 'required',
        ]);



        $proveedor = new Proveedor;
        $proveedor->NIT = $request['NIT'];
        $proveedor->nombre = $request['nombre'];
        $proveedor->direccion = $request['direccion'];
        $proveedor->telefono = $request['telefono'];

        $usuario_registrador = Session::get('usuario.correo');
        $proveedor->usuario_registrador = $usuario_registrador;

        if ($proveedor->save()) {

            return redirect('listarProveedor')->with('success', 'proveedor registrado correctamente');
        }
    }

    protected function getListarProveedor() {

        $proveedores = Proveedor::all();
        //print_r($cavas);
        return view('Proveedor/listarProveedor', compact('proveedores'));
    }

    protected function getEditarProveedor(Request $request) {

        $NIT = $request['NIT'];

        $proveedorSeleccionado = Proveedor::where('NIT', $NIT)->get();
        $proveedor = $proveedorSeleccionado[0];

        return view('Proveedor/editarProveedor', compact('proveedor'));
    }

    // 


    protected function postEditarProveedor(Request $request) {


        $this->validate($request, [
            'NIT' => 'required',
            'nombre' => 'required',
        ]);


        $anteriorNIT = $request['anteriorNIT'];

        $nuevoNIT = $request['NIT'];
        $nuevoNombre = $request['nombre'];
        $nuevoTelefono = $request['telefono'];
        $nuevoDireccion = $request['direccion'];
        $nuevoHabilitado = $request['habilitado'];



        if ($proveedorActualizado = Proveedor::where('NIT', $anteriorNIT)
                ->update(['NIT' => $nuevoNIT,
            'nombre' => $nuevoNombre,
            'telefono' => $nuevoTelefono,
            'direccion' => $nuevoDireccion,
            'habilitado' => $nuevoHabilitado,
                ])) {


            return redirect('listarProveedor')->with('success', 'proveedor editado correctamente');
        } else {
            return redirect('listarProveedor')->with('error', 'proveedor NO editada correctamente');
        }
    }

}
