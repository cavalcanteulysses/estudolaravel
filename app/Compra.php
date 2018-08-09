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

    public function localOrigem(){
        return $this->belongsTo('App\Local');   
    }
    
    public function statusProcesso(){
        return $this->belongsTo('App\StatusProcesso');   
    }

    public function tipoDocumento(){
        return $this->belongsTo('App\TipoDocumento');   
    }

    public function tipoProcesso(){
        return $this->belongsTo('App\TipoProcesso');   
    }
}
