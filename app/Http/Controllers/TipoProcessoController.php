<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TipoProcessoRequest;
use App\Http\Requests;
use App\TipoProcesso;

class TipoProcessoController extends Controller
{
    public function index(){
        $tipos = TipoProcesso::all();
        return view('dados.list',['dados'=>$tipos]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(TipoProcessoRequest $request){
        $input = $request->all();
        TipoProcesso::create($input);
        return redirect('dados/todos-tipos-processos');
    }

    public function destroy($id){
        TipoProcesso::find($id)->delete();
        return redirect('dados/todos-tipos-processos');
    }

    public function edit($id){
        $dado = TipoProcesso::find($id);
        return view('dados.edit',compact('dado'));
    }

    public function update(TipoProcessoRequest $request, $id){
        $tipos = TipoProcesso::find($id)->update($request->all());
        return redirect('dados/todos-tipos-processos');
    }
}
