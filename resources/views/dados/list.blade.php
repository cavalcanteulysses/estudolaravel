@extends('app')

@section('content')

    
        <div class="row justify-content-between">
            <div class="col-md-4">
                <h2>Gerenciar Dados</h2>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="/dados/{{Request::segment(2)}}/create" title="Criar Novo">Cadastrar Novo</a>
            </div>
        </div>
        <table class="table">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                @if (Request::segment(2) == "todos-locais")
                <th>sigla</th>
                @else
                @endif
                <th scope="col">Ações</th>
            </tr>
            @foreach($dados as $dado)
            <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->nome}}</td>
                @if (Request::segment(2) == "todos-locais")
                <td>{{$dado->sigla}}</td>
                @else
                @endif
                <td>
                    <a class="btn-sm btn-success" href="/dados/{{Request::segment(2)}}/{{$dado->id}}/edit" title="Editar"><i class="far fa-edit"></i></a>
                    <a class="btn-sm btn-danger" href="/dados/{{Request::segment(2)}}/{{$dado->id}}/destroy" title="Excluir"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>                
            @endforeach
        </table>
    
@endsection