<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'nome_fantasia' => 'required',
            'email' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'uf' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'ibge' => 'required',
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'O campo Nome não pode ficar vazio',
            'nome_fantasia.required' => 'O campo Nome Fantasia não pode ficar vazio',
            'email.required' => 'O campo E-mail não pode ficar vazio',
            'cep.required' => 'O campo CEP não pode ficar vazio',
            'logradouro.required' => 'O campo Logradouro não pode ficar vazio',
            'numero.required' => 'O campo Número não pode ficar vazio',
            'uf.required' => 'O campo UF não pode ficar vazio',
            'bairro.required' => 'O campo Bairro não pode ficar vazio',
            'cidade.required' => 'O campo Cidade não pode ficar vazio',
            'ibge.required' => 'O campo IBGE não pode ficar vazio',
        ];
    }
}
