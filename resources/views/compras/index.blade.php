@extends('app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Processos de Compras</h1>
    </div>
    <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Data de Protocolo na ADM</th>
                  <th>Documento</th>
                  <th>Origem</th>
                  <th>Objeto</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($compras as $compra)
                <tr>
                    <td>{{$compra->data_protocolo}}</td>
                    <td>{{$compra->tipoDocumento->nome}} nº {{$compra->numero}}</td>
                    <td>{{$compra->localOrigem->sigla}}</td>
                    <td>{{$compra->objeto}}</td>
                    <td>{{$compra->statusProcesso->nome}}</td>
                    <td>
                        <button class="btn-sm btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button class="btn-sm btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

@endsection