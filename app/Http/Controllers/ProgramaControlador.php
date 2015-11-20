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


class ProgramaControlador extends Controller {



     protected function getRegistrarPrograma() {

        return view("Programa/registrarPrograma");
        // $user2 = Session::get('usuario');
        //$user2 = Session::get('usuario.correo');
        //return $user;
        //return print_r($user['0']['cedula']);
        //return print_r($user2);
      }



}


