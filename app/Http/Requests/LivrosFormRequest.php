<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
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
            'livro' => 'required',
            'paginas' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'livro.required' => 'O campo Nome do livro precisa ser informado.',
            'paginas.required' => ' O campo N° de Páginas precisa ser informado'
        ];
    }
}
