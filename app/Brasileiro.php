<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brasileiro extends Model
{
    protected $fillable = [

        'nome', 'cpf', 'data_nascimento',
        'nome_mae', 'celular', 'quanto_ganhava',
        'enderco', 'cidade', 'estado', 'banco',
        'agencia', 'conta_corrente'
    ];

}
