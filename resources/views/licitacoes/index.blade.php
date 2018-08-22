@extends('app')

@section('content')
    
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h2>Processos de Licitações</h2>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary" href="/licitacoes/create" title="Criar Novo">Cadastrar Novo Processo</a>
            </div>
        </div>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">Data de Entrada</th>
                  <th scope="col">Objeto</th>
                  <th scope="col">Modalidade</th>
                  <th scope="col">Nº Processo</th>
                  <th scope="col">Nº Processo Adm</th>
                  <th scope="col">Data de Conclusão</th>
                  <th scope="col">Publicado</th>
                  <th scope="col">Data de Abertura</th>
                  <th scope="col">Hora de Abertura</th>
                  <th scope="col">Valor Disponível</th>
                  <th scope="col">Data de Montagem</th>
                  <th scope="col">Valor Fechado</th>
                  <th scope="col">Data de Execução</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($licitacoes as $licitacao)
                <tr>
                    <td>{{date( 'd/m/Y' , strtotime($licitacao->data_entrada))}}</td>
                    <td>{{str_limit($licitacao->objeto, $limit = 30, $end = '...')}}</td>
                    <td>{{$licitacao->modalidade->nome}}</td>
                    <td>{{$licitacao->numero_processo}}</td>
                    <td>{{$licitacao->numero_processo_adm}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($licitacao->data_conclusao))}}</td>
                    <td>
                        @if ($licitacao->publicado)
                        Sim
                        @else
                        Não
                        @endif    
                    </td>
                    <td>{{date( 'd/m/Y' , strtotime($licitacao->data_abertura))}}</td>
                    <td>{{$licitacao->hora_abertura}}</td>
                    <td>{{$licitacao->valor_disponivel}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($licitacao->data_montagem))}}</td>
                    <td>{{$licitacao->valor_fechado}}</td>
                    <td>{{date( 'd/m/Y' , strtotime($licitacao->data_execucao))}}</td>
                    <td>
                        <a class="btn-sm btn-success" href="licitacoes/{{$licitacao->id}}/edit" title="Editar"><i class="far fa-edit"></i></a>
                        <a class="btn-sm btn-danger" href="licitacoes/{{$licitacao->id}}/destroy" title="Excluir"><i class="far fa-trash-alt"></i></a>
                        <a class="btn-sm btn-info" href="#" title="Visualizar"><i class="fas fa-external-link-alt"></i></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    
@endsection