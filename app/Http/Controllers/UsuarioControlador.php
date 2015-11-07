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
use Redirect;


class UsuarioControlador extends Controller {


    public function __construct(Guard $auth) {
        $this->auth = $auth;
        //$this->middleware('guest', ['except' => 'getLogout']);
    }


    //MOSTRAR VISTA DE REGISTRAR USUARIO
    protected function getRegistrarUsuario() {
// !!! *** verificacion del usuario logueado esta habilitado y sea un director -> carga combox de roles

     
     $roles=Usuario::distinct()->select('rol')->get();

     if((Session::get('usuario.rol') == "Director") && (Session::get('usuario.habilitado'))


      return view("Usuario/registrarUsuario", compact('roles'));
    }


    //RECIBIR DATOS DE VISTA (REGISTRAR USUARIO) PARA CREAR USUARIO
    protected function postRegistrarUsuario(Request $request) {
     //!!! *** verifica que no exista otro usuario con el mismo correo ni otro usuario con la misma cédula  
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

        $usuarioCreador=Session::get('usuario.correo');
        $user->usuario_creador = $usuarioCreador;


          if ($user->save())
           
            return redirect('registrarUsuario')->with('success','usuario creado correctamente');
          }else{
            return "escribir bien dos veces el PASSWORD";
            //return redirect('registrarUsuario')->with('error','usuario NO registrado correctamente');

          }
      }



    protected function getEditarUsuario(Request $request) {

      $correoUsuario= $request['correo'];

      $usuarioSeleccionado=Usuario::where('correo',$correoUsuario)->get();
    $usuario=$usuarioSeleccionado[0];

       $usuario = Session::get('usuario');

      return view('Usuario/editarUsuario', compact('usuario'));

    }


    protected function postEditarUsuario(Request $request) {

      
      $this->validate($request, [

            'nombre'     => 'required',    
            'rol'        => 'required',
            'habilitado' => 'required',
        ]);

      //  $nombreNuevo = $request['nombre'];
        $rolNuevo    = $request['rol'];
        $estadoNuevo = $request['habilitado'];

        
        //$correo=Input::get('correo');//COJER CORREO DE LISTA DE SELECT
      //prueba
       

        $usuarioEditor = Session::get('usuario.correo');
        $correo= $request['correo'];

        if($usuarioActualizado=Usuario::where('correo',$correo)
                        ->update(['rol'=>  $rolNuevo,
                                  'habilitado'=>  $estadoNuevo,
                                  'usuario_editor'=>  $usuarioEditor,

                          ])){


            return redirect('listarUsuario')->with('success','usuario editado correctamente');

        }else{
           return redirect('listarUsuario')->with('error','usuario NO editado correctamente');

        }


  //return $this->getListarUsuario();

//return Redirect::to('listarUsuario');
// return redirect('registrarUsuario')->with('success','usuario registrado correctamente');


    }

    //MOSTRAR VISTA DE EDITAR PERFIL
    protected function getEditarPerfil() {

      $usuario = Session::get('usuario');
     
         return view('Usuario/editarPerfil', compact('usuario'));
    }



protected function postEditarPerfil(Request $request) {

     
        
if($request['passwordAnterior']==="") {
//NO CAMBIAR PASSWORD


 
      $this->validate($request, [
            'nombre' => 'required',
            'cedula' => 'required',
            'correo' => 'required',
        ]);


        $nombreNuevo = $request['nombre'];
        $cedulaNuevo = $request['cedula'];
        $correoNuevo = $request['correo'];
        
        $correo= Session::get('usuario.correo');

       if( $usuario=Usuario::where('correo',$correo)
                        ->update(['nombre'=>  $nombreNuevo,
                                  'cedula'=>  $cedulaNuevo,
                                  'correo'=>  $correoNuevo,

                          ])){

        Session::put('usuario.correo',$correoNuevo);
        Session::put('usuario.cedula',$cedulaNuevo);
        Session::put('usuario.nombre',$nombreNuevo);

       return redirect('editarUsuario')->with('success','Perfil actualizado');

        }
        else{
          return "error";
        }

     



       //Session::flash('success',"Perfil editado correctamente");
       // return  "OK";


      //  return "SE ACTULIZO NOMBRE,CORREO Y CEDULA";


}else{
//CAMBIAR PASSWORD


      $this->validate($request, [
            'nombre' => 'required',
            'cedula' => 'required',
            'correo' => 'required',
            'passwordAnterior' => 'required',
            'password' => 'required',
            'password2' => 'required',
        ]);



//1-VERIFICAR SI PASSWORD = PASSWORD2
//2-VERIFICAR PASSWORD ANTERIOR
//3-ACTUALIZAR USUARIO
//4-ACTUALIZAR VARIABLE DE SESSION 

      if($request['password']==$request['password2']){

        $correoAnterior= Session::get('usuario.correo');


        if ($this->auth->attempt($credentials, $request->has('remember'))) {

          return "password anterior igual";


        }else{

          return "error password anterior DIFERENTE";
        }
      }





      }//ELSE ERROR CAMPOS INCOMPLETOS

    

          
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


