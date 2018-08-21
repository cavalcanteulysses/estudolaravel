@extends('app')

@section('content')

    <div class="col-md-10">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <h1>Gerenciar Dados</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="/dados/{{Request::segment(2)}}/create" title="Criar Novo">Cadastrar Novo Processo</a>
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
                    <a class="btn-sm btn-success" href="#" title="Editar"><i class="far fa-edit"></i></a>
                    <a class="btn-sm btn-danger" href="#" title="Excluir"><i class="far fa-trash-alt"></i></a>
                    <a class="btn-sm btn-info" href="#" title="Visualizar"><i class="fas fa-external-link-alt"></i></a>
                </td>
            </tr>                
            @endforeach
        </table>
    </div>
@endsection