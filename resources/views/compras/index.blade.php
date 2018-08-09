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
            <tr>
                @foreach($compras as $compras)
                <td>{{$compras->id}}</td>
                <td>{{$compras->numero}}</td>
                <td>{{$compras->data_protocolo}}</td>
                <td>{{$compras->objeto}}</td>
                <td>{{$compras->tipoDocumento->nome}}</td>
                <td>{{$compras->localOrigem->sigla}}</td>
                <td>{{$compras->tipoProcesso->nome}}</td>
                <td>{{$compras->statusProcesso->nome}}</td>
                @endforeach
            </tr>
        </table>


    </div>

@endsection