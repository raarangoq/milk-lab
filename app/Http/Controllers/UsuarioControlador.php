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
//use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\ServiceProvider;


class UsuarioControlador extends Controller {



    //MOSTRAR VISTA DE REGISTRAR USUARIO
    protected function getRegistrarUsuario() {

     $roles=Usuario::distinct()->select('rol')->get();


        return view("Usuario/registrarUsuario", compact('roles'));
    }


    //RECIBIR DATOS DE VISTA (REGISTRAR USUARIO) PARA CREAR USUARIO
    protected function postRegistrarUsuario(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'correo' => 'required',
            'password' => 'required',
            'password2' => 'required',
            'cedula' => 'required',
            'rol' => 'required',
        ]);

        if($request['password']==$request['password2']){
        $data = $request;

        $user = new Usuario;
        $user->nombre = $data['nombre'];
        $user->correo = $data['correo'];
        $user->password = bcrypt($data['password']);
        $user->cedula = $data['cedula'];
        $user->rol = $data['rol'];

        //$user->usuario_creador = 'raarangoq@unal.edu.co';
        $usuarioCreador=Session::get('usuario.correo');
        $user->usuario_creador = $usuarioCreador;

          if ($user->save())
            return "se ha registrado correctamente el usuario";
          }else{
            return "escribir bien dos veces el PASSWORD";
          }
      }


    //MOSTRAR VISTA DE EDITAR USUARIO
/*    protected function getEditarUsuario() {

      $usuarioSession = Session::get('usuario.correo');
      $usuarios=Usuario::where('correo','!=',$usuarioSession)->get();     
         return view('Usuario/editarUsuario', compact('usuarios')); 
    }
*/
    protected function getEditarUsuario(Request $request) {

      $correoUsuario= $request['correo'];

      $usuarioSeleccionado=Usuario::where('correo',$correoUsuario)->get();
      $usuario=$usuarioSeleccionado[0];

      return view('Usuario/editarUsuario', compact('usuario'));

    }


    protected function postEditarUsuario(Request $request) {

      
      $this->validate($request, [
            'correo' => 'required',
            'rol' => 'required',
            'habilitado' => 'required',
        ]);


        $rolNuevo = $request['rol'];
        $estadoNuevo = $request['habilitado'];

        $usuarioEditor = Session::get('usuario.correo');
        $correo= $request['correo'];

        $usuarioActualizado=Usuario::where('correo',$correo)
                        ->update(['rol'=>  $rolNuevo,
                                  'habilitado'=>  $estadoNuevo,
                                  'usuario_editor'=>  $usuarioEditor,

                          ]);


  return $this->getListarUsuario();


    }

    //MOSTRAR VISTA DE EDITAR PERFIL
    protected function getEditarPerfil() {

      $usuario = Session::get('usuario');
     
         return view('Usuario/editarPerfil', compact('usuario'));
    }



protected function postEditarPerfil(Request $request) {

      
      $this->validate($request, [
            'nombre' => 'required',
            'cedula' => 'required',
            'correo' => 'required',
        ]);


        $nombreNuevo = $request['nombre'];
        $cedulaNuevo = $request['cedula'];
        $correoNuevo = $request['correo'];

        $correo= Session::get('usuario.correo');

        $usuario=Usuario::where('correo',$correo)
                        ->update(['nombre'=>  $nombreNuevo,
                                  'cedula'=>  $cedulaNuevo,
                                  'correo'=>  $correoNuevo,

                          ]);

        Session::put('usuario.correo',$correoNuevo);
        Session::put('usuario.cedula',$cedulaNuevo);
        Session::put('usuario.nombre',$nombreNuevo);

        return  "OK";
          
    }

     //FUNCION DE AJAX PARA EDITAR USUARIO
     protected function getAjax() {

       $correo=Input::get('correo');//COJER CORREO DE LISTA DE SELECT
       $usuarioSeleccionado=Usuario::where('correo',$correo)->get();//BUSCAR TODOS LOS ATRIBUTOS DE USUARIO CON CORREO

       return $usuarioSeleccionado;//ENVIAR TODOS LOS DATOS DE USUARIO
      }


    protected function getListarUsuario() {

      $usuarioSession = Session::get('usuario.correo');
      $usuarios=Usuario::where('correo','!=',$usuarioSession)->get();
     
         return view('Usuario/listarUsuario', compact('usuarios'));
    }




}


