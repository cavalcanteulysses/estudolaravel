<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProcesso extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function Compra(){
        return $this->hasMany('App\Compra');
    }
}
