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
        return view('dados.index',['dados'=>$locals]);
    }

    public function create(){
        return view('dados.create');
    }

    public function store(LocalRequest $request){
        $input = $request->all();
        Local::create($input);
        return redirect('compras/todos-locais');
    }
}
