@extends('app')

@section('content')

    <div class="container">
        <h1>Novo dado específico</h1>

        {!! Form::open(['url'=>'compras/'.Request::segment(2).'/store/']) !!}


            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'form-control']) !!}
            </div>

            @if (Request::segment(2) == "todos-locais")
            <div class="form-group">
                {!! Form::label('sigla', 'Sigla:') !!}
                {!! Form::text('sigla', null, ['class'=>'form-control']) !!}
            </div>
            @else
            @endif

            <div class="form-group">
                {!! Form::submit('Salvar dados', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>


@endsection()