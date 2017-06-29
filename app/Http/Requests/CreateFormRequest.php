<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'name' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'direccion' => 'required',

            'universidad' => 'required',
            'carrera' => 'required',
            'egreso' => 'required',
            'departamento' => 'required',
            'facultad' => 'required',

            'empresa' => 'required',
            'cargo' => 'required',
            'pago' => 'required',
        ];
    }
}
