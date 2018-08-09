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
        $local = Local::all('sigla');
        $statusProcesso = StatusProcesso::all('nome');
        $tipoDocumento = TipoDocumento::all('nome');
        $tipoProcesso = TipoProcesso::all();
        return view('compras.create',['local'=>$local,'statusProcesso'=>$statusProcesso,'tipoDocumento'=>$tipoDocumento,'tipoProcesso'=>$tipoProcesso]);
    }
}
