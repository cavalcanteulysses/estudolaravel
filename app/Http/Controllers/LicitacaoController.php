<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LicitacaoRequest;
use App\Licitacao;
use App\Modalidade;

class LicitacaoController extends Controller
{
    public function index(){
        $licitacoes = Licitacao::all();
        return view('licitacoes.index',['licitacoes'=>$licitacoes]);
    }

    public function create(){
        $modalidade = Modalidade::all()->sortBy('nome', SORT_NATURAL | SORT_FLAG_CASE)->pluck('nome', 'id');;
        return view('licitacoes.create',['modalidade'=>$modalidade]);
    }

    public function store(LicitacaoRequest $request){
        $input = $request->all();
        Licitacao::create($input);
        return redirect('licitacoes');
    }

    public function destroy($id){
        Licitacao::find($id)->delete();
        return redirect('licitacoes');
    }

    public function edit($id){
        $licitacao = Licitacao::find($id);
        $modalidade = Modalidade::all()->sortBy('nome', SORT_NATURAL | SORT_FLAG_CASE)->pluck('nome', 'id');;
        return view('licitacoes.edit',compact('licitacao'),['modalidade'=>$modalidade]);
    }

    public function update(LicitacaoRequest $request, $id){
        $licitacao = Licitacao::find($id)->update($request->all());
        return redirect('licitacoes');
    }
}
