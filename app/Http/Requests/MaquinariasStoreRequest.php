<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaquinariasStoreRequest extends FormRequest
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
            'id_general' => 'required',
            'nombre'=> 'required|string',
            'descripcion' => 'required',
            'tipo_codigo' => 'required',
            'estado' => 'required',
            'area_codigo' => 'required',
            'sala_codigo' => 'required'

        ];
    }
}
