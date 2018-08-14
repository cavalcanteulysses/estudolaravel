@extends('app')

@section('content')

    <div class="container">
        <h1>Editar Compra: {{$compra->numero}}</h1>

        @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url'=>"compras/$compra->id/update",'method'=>'put']) !!}

        <div class="form-group">
                {!! Form::label('numero', 'Numero do Documento:') !!}
                {!! Form::number('numero', $compra->numero, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_protocolo', 'Data do Protocolo na Administração:') !!}
                {!! Form::date('data_protocolo', $compra->data_protocolo, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tipo_documento_id', 'Tipo de Documento:') !!}
                {!! Form::select('tipo_documento_id',$tipoDocumento, $compra->tipo_documento_id) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('local_origem_id', 'Local de Origem:') !!}
                {!! Form::select('local_origem_id',$local, $compra->local_origem_id) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('tipo_processo_id', 'Tipo de Processo:') !!}
                {!! Form::select('tipo_processo_id',$tipoProcesso, $compra->tipo_processo_id) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('status_processo_id', 'Status/Andamento do Processo:') !!}
                {!! Form::select('status_processo_id',$statusProcesso, $compra->status_processo_id) !!}
            </div>

            <div class="form-group">
                {!! Form::label('objeto', 'Objeto:') !!}
                {!! Form::textarea('objeto', $compra->objeto, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Compra', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>


@endsection()