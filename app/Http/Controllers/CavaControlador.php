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


class CavaControlador extends Controller {



    protected function getRegistrarCava() {

        return view("Cava/registrarCava");
    }
    
    protected function postRegistrarCava() {

        //return view("Cava/registrarCava");
    }
    
    protected function getEditarCava() {

        return view("Cava/editarCava");
    }

    protected function postEditarCava() {

        //return view("Cava/registrarCava");
    }    
        
    protected function getListarCava() {

        return view("Cava/listarCava");
    }

    protected function postListarCava() {

     //   return view("Cava/registrarCava");
    }



}


