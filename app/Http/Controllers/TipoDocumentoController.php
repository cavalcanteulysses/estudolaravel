<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TipoDocumentoRequest;
use App\Http\Requests;
use App\TipoDocumento;

class TipoDocumentoController extends Controller
{
    public function index(){
        $tipos = TipoDocumento::all();
        return view('dados.index',['dados'=>$tipos]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(TipoDocumentoRequest $request){
        $input = $request->all();
        TipoDocumento::create($input);
        return redirect('dados/todos-tipos-documentos');
    }

    public function destroy($id){
        TipoDocumento::find($id)->delete();
        return redirect('dados/todos-tipos-documentos');
    }
}
