<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'produto',
        'unidade_id',
        'tributacao_id',
        'preco',
        'cfop',
        'gtin',
        'ncm',
        'cest',
        'cbenef',
        'extipi',
        'mva',
        'nfci'
    ];
}
