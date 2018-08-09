<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProcesso extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function compras(){
        return $this->hasMany('App\Compras');
    }
}
