<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'ie',
        'iest',
        'im',
        'fone',
        'email',
        'email_contabilidade',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'uf',
        'cidade',
        'bairro',
        'cnae',
        'regime_tributario',
        'ibge',
    ];
}
