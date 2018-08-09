<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Local;
use App\StatusProcesso;
use App\TipoDocumento;
use App\TipoProcesso;

class ComprasController extends Controller
{
    public function index(){
        $compras = Compra::all();
        return view('compras.index',['compras'=>$compras]);
    }

    public function create(){
        return view('compras.create');
    }
}
