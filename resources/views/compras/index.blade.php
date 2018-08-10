@extends('app')

@section('content')

    <div class="container">
    
        <h1>Compras</h1>

        <table border="solid 1px">
            <tr>
                <th>id</th>
                <th>numero</th>
                <th>data_protocolo</th>
                <th>objeto</th>
                <th>tipo_documento_id</th>
                <th>local_origem_id</th>
                <th>tipo_processo_id</th>
                <th>status_processo_id</th>
            </tr>
            @foreach($compras as $compra)
            <tr>
                <td>{{$compra->id}}</td>
                <td>{{$compra->numero}}</td>
                <td>{{$compra->data_protocolo}}</td>
                <td>{{$compra->objeto}}</td>
                <td>{{$compra->tipoDocumento->nome}}</td>
                <td>{{$compra->localOrigem->sigla}}</td>
                <td>{{$compra->tipoProcesso->nome}}</td>
                <td>{{$compra->statusProcesso->nome}}</td>
            </tr>                
            @endforeach
        </table>


    </div>

@endsection