@extends('app')

@section('content')

    <div class="container">
        
        <h1>Gerenciar Dados</h1>

        <table border="solid 1px">
            <tr>
                <th>id</th>
                <th>nome</th>
                @if (Request::segment(2) == "todos-locais")
                <th>sigla</th>
                @else
                @endif
            </tr>
            @foreach($dados as $dado)
            <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->nome}}</td>
                @if (Request::segment(2) == "todos-locais")
                <td>{{$dado->sigla}}</td>
                @else
                @endif
            </tr>                
            @endforeach
        </table>


    </div>

@endsection