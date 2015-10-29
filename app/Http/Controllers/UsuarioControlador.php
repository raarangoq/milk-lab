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
            'nombre'    => 'required',
            'correo'    => 'required',
            'password'  => 'required',
            'password2' => 'required',
            'cedula'    => 'required',
            'rol'       => 'required',
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

         
   
         return redirect('registrarUsuario')->with('success', 'registrado correctamente'); 
              //Session::flash('success',"se ha registrado correctamente el usuario");
          }
      }


    //MOSTRAR VISTA DE EDITAR USUARIO
    protected function getEditarUsuario() {

      $usuarioSession = Session::get('usuario.correo');
      $usuarios=Usuario::where('correo','!=',$usuarioSession)->get();
     
         return view('Usuario/editarUsuario', compact('usuarios'));
    }

    protected function postEditarUsuario(Request $request) {

      
      $this->validate($request, [
            'nombre'     => 'required',
            'rol'        => 'required',
            'habilitado' => 'required',
        ]);


        $nombreNuevo = $request['nombre'];
        $rolNuevo    = $request['rol'];
        $estadoNuevo = $request['estado'];

        $usuarioEditor = Session::get('usuario.correo');

        $correo=Input::get('correo');//COJER CORREO DE LISTA DE SELECT
      //prueba
       


//CONSULTA UPDATE
//Usuario::update('update usuarios set nombre = aa where correo = ?', [$correo]);
//$affected = Usuario::update('update usuarios set cedula = 1 where correo = ?', ['xxx']);

   // return "CONSULTA UPDATE";
       // Session::flash('success',"CONSULTA UPDATE");
      //$usuarios=Usuario::where('correo','!=',$usuarioSession)->get();
    
          redirect('editarUsuario')->with('success','Consulta actualizada');
           
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


       Session::flash('success',"Perfil editado correctamente");
       // return  "OK";

          
    }

     //FUNCION DE AJAX PARA EDITAR USUARIO
     protected function getAjax() {

       $correo=Input::get('correo');//COJER CORREO DE LISTA DE SELECT
       $usuarioSeleccionado=Usuario::where('correo',$correo)->get();//BUSCAR TODOS LOS ATRIBUTOS DE USUARIO CON CORREO

       return $usuarioSeleccionado;//ENVIAR TODOS LOS DATOS DE USUARIO
      }


    protected function getListarrUsuario() {

      $usuarioSession = Session::get('usuario.correo');
      $usuarios=Usuario::where('correo','!=',$usuarioSession)->get();
     
         return view('Usuario/editarUsuario', compact('usuarios'));
    }
    



}


