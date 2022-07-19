<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'produto' => 'required',
            'preco' => 'required',
            'unidade_id' => 'required',
        ];
    }

    public function messages() {
        return [
            'produto.required' => 'O campo produto não pode ficar vazio',
            'preco.required' => 'O campo preco não pode ficar vazio',
            'unidade_id.required' => 'O campo Unidade não pode ficar vazio',
        ];
    }
}
