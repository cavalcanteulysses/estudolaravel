<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function compras(){
        return $this->hasMany('App\Compras');
    }
}
