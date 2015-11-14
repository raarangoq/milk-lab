<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioCreadoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if((Session::get('usuario.rol') == "Director") && (Session::get('usuario.habilitado'))

            return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'    => 'required',
            'correo'    => 'required|primary:usuarios',
            'password'  => 'required',
            'password2' => 'required',
            'cedula'    => 'required|unique:usuarios',
            //'rol'       => 'required',


        ];
    }
}
