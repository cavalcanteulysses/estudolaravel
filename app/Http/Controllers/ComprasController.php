<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CompraRequest;
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
        $local = Local::all()->sortBy('sigla', SORT_NATURAL | SORT_FLAG_CASE)->pluck('sigla', 'id');
        $statusProcesso = StatusProcesso::all()->sortBy('nome', SORT_NATURAL | SORT_FLAG_CASE)->pluck('nome', 'id');;
        $tipoDocumento = TipoDocumento::all()->sortBy('nome', SORT_NATURAL | SORT_FLAG_CASE)->pluck('nome', 'id');;
        $tipoProcesso = TipoProcesso::all()->sortBy('nome', SORT_NATURAL | SORT_FLAG_CASE)->pluck('nome', 'id');;
        return view('compras.create',['local'=>$local,'statusProcesso'=>$statusProcesso,'tipoDocumento'=>$tipoDocumento,'tipoProcesso'=>$tipoProcesso]);
    }

    public function store(CompraRequest $request){
        $input = $request->all();
        Compra::create($input);
        return redirect('compras');
    }

    public function destroy($id){
        Compra::find($id)->delete();
        return redirect('compras');
    }

    public function edit($id){
        $compra = Compra::find($id);
        return view('compras.edit',compact('compra'));
    }

    public function update(CompraRequest $request, $id){
        $compra = Compra::find($id)->update($request->all());
        return redirect('compras');
    }
}
