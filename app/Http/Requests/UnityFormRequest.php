<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnityFormRequest extends FormRequest
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
        return $rules = [
            'name'        => 'required|min:3|max:50',   
            'description' => 'max:500',          
          ];
    }

    public function messages(){

        return [
            'name.required'          => "O campo unidade é obrigatório",
            'name.min'               => "O campo unidade tem que ter pelo menos 3 caracteres",         
            'description.max'        => "O campo descrição máximo 500 caracteres",
        ];
    }
}
