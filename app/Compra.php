<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'numero',
        'data_protocolo',
        'objeto',
        'tipo_documento_id',
        'local_origem_id',
        'tipo_processo_id',
        'status_processo_id'
    ];
}
