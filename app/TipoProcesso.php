<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProcesso extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function Compra(){
        return $this->hasMany('App\Compra');
    }
}
