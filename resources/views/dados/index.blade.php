@extends('app')

@section('content')

    <div class="col-md-10">
        <h1>Todos os Dados Cadastrados</h1>
        <hr>
        <a class="btn btn-primary btn-lg" href="/dados/todos-locais">Gerenciar Locais</a>
        <a class="btn btn-primary btn-lg" href="/dados/todos-status">Gerenciar Status dos Processos</a>
        <a class="btn btn-primary btn-lg" href="/dados/todos-tipos-documentos">Gerenciar Tipos dos Documentos</a>
        <a class="btn btn-primary btn-lg" href="/dados/todos-tipos-processos">Gerenciar Tipos dos Processos</a>
    </div>
@endsection