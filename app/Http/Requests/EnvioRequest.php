<?php

namespace SMS\Http\Requests;

use SMS\Http\Requests\Request;

class EnvioRequest extends Request
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
            'mun' => 'required',
            'carg' => 'required',
            'multiselect' => 'required',
            'mensaje' => 'required'

            
        ];
    }

    public function messages()
    {
        return [
            'multiselect.required' => 'Debes seleccionar un contacto',
            'mun.required' => 'Debes seleccionar un municipio',
            'carg.required' => 'Debes seleccionar un cargo',
            'mensaje.required' => 'Debes escribir un mensaje'
           
            
        ];
    }
}
