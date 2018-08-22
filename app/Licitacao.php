<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licitacao extends Model
{
    protected $fillable = [
       'data_entrada',
       'objeto',
       'modalidade_id',
       'numero_processo',
       'numero_processo_adm',
       'data_conclusao',
       'publicado',
       'data_abertura',
       'hora_abertura',
       'valor_disponivel',
       'data_montagem',
       'valor_fechado',
       'data_execucao'
    ];

    public function Modalidade(){
        return $this->belongsTo('App\Modalidade');   
    }
    
}
