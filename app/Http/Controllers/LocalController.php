<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LocalRequest;
use App\Http\Requests;
use App\Local;

class LocalController extends Controller
{
    public function index(){
        $locals = Local::all();
        return view('dados.list',['dados'=>$locals]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(LocalRequest $request){
        $input = $request->all();
        Local::create($input);
        return redirect('dados/todos-locais');
    }

    public function destroy($id){
        Local::find($id)->delete();
        return redirect('dados/todos-locais');
    }

    public function edit($id){
        $dado = Local::find($id);
        return view('dados.edit',compact('dado'));
    }

    public function update(LocalRequest $request, $id){
        $local = Local::find($id)->update($request->all());
        return redirect('dados/todos-locais');
    }

}
