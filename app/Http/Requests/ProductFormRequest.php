<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   
        // para permitir o usuario fazer inserção ou atualização
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
            'category_id' => 'required|numeric'
          ];
    }

    public function messages(){

        return [
            'name.required'          => "O campo nome é obrigatório",
            'name.min'               => "O campo nome tem que ter pelo menos 3 caracteres",
            'category_id.required'   => "O campo categoria é obrigatório",
            'description.max'        => "O campo descrição máximo 500 caracteres",
        ];
    }
}
