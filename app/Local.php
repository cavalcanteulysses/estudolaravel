<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = [
        'nome',
        'sigla'
    ];

    public function compras(){
        return $this->hasMany('App\Compras');
    }
}
