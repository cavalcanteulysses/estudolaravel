<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModalidadeRequest;
use App\Http\Requests;
use App\Modalidade;

class ModalidadeController extends Controller
{
    public function index(){
        $modadalidades = Modalidade::all();
        return view('dados.list',['dados'=>$modadalidades]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(ModalidadeRequest $request){
        $input = $request->all();
        Modalidade::create($input);
        return redirect('dados/todas-modalidades');
    }

    public function destroy($id){
        Modalidade::find($id)->delete();
        return redirect('dados/todas-modalidades');
    }

    public function edit($id){
        $dado = Modalidade::find($id);
        return view('dados.edit',compact('dado'));
    }

    public function update(ModalidadeRequest $request, $id){
        $modadalidades = Modalidade::find($id)->update($request->all());
        return redirect('dados/todas-modalidades');
    }
}
