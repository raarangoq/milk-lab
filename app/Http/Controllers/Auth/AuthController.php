<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerSession;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;
use Redirect;


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
        //$this->middleware('guest', ['except' => 'getLogout']);
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

          $correo=$request['correo']; 
          $user=Usuario::where('correo',$correo)->get();


          $usuario['correo']=$user['0']['correo'];
          $usuario['nombre']=$user['0']['nombre'];
          $usuario['cedula']=$user['0']['cedula'];
          $usuario['rol']=$user['0']['rol'];
          $usuario['password']=$user['0']['password'];
          $usuario['habilitado']=$user['0']['habilitado'];
          $usuario['usuario_creador']=$user['0']['usuario_creador'];


          Session::put('usuario',$usuario);
          
           return view("home");
            
        } else {
            //return "credenciales incorrectas";
            return Redirect::to('login')->withErrors("XXXXXX");
        }
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


}


