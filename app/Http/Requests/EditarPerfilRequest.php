<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditarPerfilRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nombre' => 'required',
            'cedula' => 'required|unique:usuarios',
            'correo' => 'required|unique:usuarios',
        ];
    }
}