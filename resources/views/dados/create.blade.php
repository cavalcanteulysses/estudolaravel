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

        {!! Form::open(['url'=>'dados/'.Request::segment(2).'/store/']) !!}
        <div class="form-row">
            <div class="form-group col">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'form-control']) !!}
            </div>

            @if (Request::segment(2) == "todos-locais")
            <div class="form-group col">
                {!! Form::label('sigla', 'Sigla:') !!}
                {!! Form::text('sigla', null, ['class'=>'form-control']) !!}
            </div>
            @else
            @endif
        </div>
            <div class="form-group">
                {!! Form::submit('Salvar dados', ['class'=>'btn btn-primary']) !!}
                <a class="btn btn-danger" href="/" title="Cancelar">Cancelar cadastro</a>
            </div>

        {!! Form::close() !!}

   

@endsection()