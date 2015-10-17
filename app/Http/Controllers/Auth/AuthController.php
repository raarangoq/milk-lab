<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    protected $username = 'correo';
    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth) {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin() {
        return view("login");
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'correo' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('correo', 'password');
        //$credentials["habilitado"] = 1;  


        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            //$data = $request->session()->all();
            //$request['correo'];
            //$usr=Usuario::all();

            /*
              $usr =Usuario::where('correo', $request['correo'])
              ->take(10)
              ->get();
              foreach ($usr as $u) {
              echo $u->rol;

              //print_r($usr[0]['nombre']);
              print_r($usr['0']['cedula']);
             * 
             * 
              }$_SESSION=$usr =Usuario::where('correo', $request['correo'])
              ->take(10)
              ->get();
            print_r($_SESSION);
             *///session()->regenerate();
             //$value = $request->session()->get('nombre');
             //print_r($value);
            
            return view("home");
            
        } else {
            return "credenciales incorrectas";
        }
    }

    protected function getRegister() {
        return view("registro");
    }

    protected function postRegister(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'correo' => 'required',
            'password' => 'required',
            'cedula' => 'required',
            'rol' => 'required',
        ]);

        $data = $request;

        $user = new Usuario;
        $user->nombre = $data['nombre'];
        $user->correo = $data['correo'];
        $user->password = bcrypt($data['password']);
        $user->cedula = $data['cedula'];
        $user->rol = $data['rol'];
        $user->usuario_creador = 'raarangoq@unal.edu.co';

        if ($user->save())
            return "se ha registrado correctamente el usuario";
    }

//para terminar sesión
    protected function getLogout() {
        $this->auth->logout();

        Session::flush();

        return redirect('login');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }


    protected function getRegistrarUsuario() {

     $roles=Usuario::distinct()->select('rol')->get();


        return view("registrarUsuario", compact('roles'));
    }

    protected function getEditarUsuario() {
        //return view("editarUsuario")->with('nombre', 'alejo');;
      $usuarios=Usuario::all();
     
         return view('editarUsuario', compact('usuarios'));
    }




 protected function getRegistrarCava() {

        return view("registrarCava");
    }




 protected function getRegistrarBodega() {

        return view("registrarBodega");
    }









}


