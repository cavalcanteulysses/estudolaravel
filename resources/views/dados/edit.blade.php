@extends('app')

@section('content')

    
        <h2>Cadastro de Novo Dado</h2>
        <hr>

        @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url'=>"dados/".Request::segment(2)."/$dado->id/update",'method'=>'put']) !!}
        <div class="form-row">
            <div class="form-group col">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $dado->nome, ['class'=>'form-control']) !!}
            </div>

            @if (Request::segment(2) == "todos-locais")
            <div class="form-group col">
                {!! Form::label('sigla', 'Sigla:') !!}
                {!! Form::text('sigla', $dado->sigla, ['class'=>'form-control']) !!}
            </div>
            @else
            @endif
        </div>
            <div class="form-group">
                {!! Form::submit('Atualizar Dados', ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-danger" href="/dados/{{Request::segment(2)}}" title="Cancelar">Cancelar Atualização</a>
            </div>

        {!! Form::close() !!}

   

@endsection()