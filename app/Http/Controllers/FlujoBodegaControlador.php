<?php

namespace App\Http\Controllers;

use App\Models\Cava;
use App\Models\ControlDeCava;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Input;


class FlujoBodegaControlador extends Controller {

    protected function getRegistrarFlujoBodega() {

        return view("FlujoBodega/registrarFlujoBodega");
    }



   

}


