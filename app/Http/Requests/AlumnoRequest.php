<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'matricula'=> 'required|max:10',
            'nombreCompleto'=> 'required',
            'correoElectronico'=> 'required',
            'numeroTelefonico'=> 'required',
            'edad'=> 'required|numeric|min:5|max:99'
        ];
    }
}
