<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabajoTitulacionUpdateRequest extends FormRequest
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
            
            'nombre'   => 'required',
            //'duracion' => 'required|integer|Min:1',
            //'comision' => 'required|in:SI,NO',
            //'cant_estudiante'             => 'required|integer|Min:1',
        ];
    }
}
