<?php

namespace SMS\Http\Requests;

use SMS\Http\Requests\Request;

class ContactoRequest extends Request
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
            'municipio' => 'required',
            'cargo' => 'required',
            'numero' => 'required|unique:datos_pers|min:11'   

            
        ];
    }

    public function messages()
    {
        return [
            
            'municipio.required' => 'Debes seleccionar un municipio',
            'cargo.required' => 'Debes seleccionar un cargo',
            'numero.required' => 'Debes seleccionar un numero'
           
            
        ];
    }
}
