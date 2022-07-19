<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'nome_fantasia',
        'cpf',
        'cnpj',
        'celular',
        'email',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'uf',
        'cidade',
        'bairro',
        'ie',
        'im',
        'rg',
        'suframa',
        'idEstrangeiro',
        'indIEDest',
        'ibge',
    ];
}
