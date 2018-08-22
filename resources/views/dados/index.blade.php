@extends('app')

@section('content')

    
        <h2>Todos os Dados Cadastrados</h2>
        <hr>
        <div class="row">
                <ul class="list-group">
                        <li class="list-group-item">
                        <a class="btn btn-primary btn-block" href="/dados/todos-locais">Gerenciar Locais</a>
                        </li> 
                        <li class="list-group-item">
                        <a class="btn btn-primary btn-block" href="/dados/todos-status">Gerenciar Status dos Processos</a>
                        </li>
                        <li class="list-group-item">
                        <a class="btn btn-primary btn-block" href="/dados/todos-tipos-documentos">Gerenciar Tipos dos Documentos</a>
                        </li>
                        <li class="list-group-item">
                        <a class="btn btn-primary btn-block" href="/dados/todos-tipos-processos">Gerenciar Tipos dos Processos</a>
                        </li>  
                        <li class="list-group-item">
                        <a class="btn btn-primary btn-block" href="/dados/todas-modalidades">Gerenciar Modalidades de Licitação</a>
                        </li> 
                </ul> 
        </div>
    
@endsection