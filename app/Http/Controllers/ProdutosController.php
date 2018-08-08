<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produto;

class ProdutosController extends Controller
{   

    public function index(){
        $produtos = Produto::all();
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
    }

    public function show($id){
        $produto = Produto::find($id);
        echo "<pre>";
        print_r($produto);
        echo "</pre>";
    }

    
}
