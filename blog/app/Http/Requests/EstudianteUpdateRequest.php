<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteUpdateRequest extends FormRequest
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
            'rut'              => 'required|unique:estudiantes,rut,' . $this->estudiante,
            'nombre'           => 'required|alpha',
            'apellido_paterno' => 'required|alpha',
            'apellido_materno' => 'required|alpha',
            'fono'             => 'required|integer|Min:100000',
            'email'            => 'required|email',
            //'carreras'         => 'required|array',
        ];
    }
}
