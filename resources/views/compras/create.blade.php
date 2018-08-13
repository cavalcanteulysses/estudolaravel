@extends('app')

@section('content')

    <div class="container">
        <h1>Nova Compra</h1>

        @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url'=>'compras/store']) !!}

            <div class="form-group">
                {!! Form::label('numero', 'Numero do Documento:') !!}
                {!! Form::number('numero', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('data_protocolo', 'Data do Protocolo na Administração:') !!}
                {!! Form::date('data_protocolo', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                    {!! Form::label('tipo_documento_id', 'Tipo de Documento:') !!}
                    {!! Form::select('tipo_documento_id',$tipoDocumento, null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('local_origem_id', 'Local de Origem:') !!}
                    {!! Form::select('local_origem_id',$local, null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('tipo_processo_id', 'Tipo de Processo:') !!}
                    {!! Form::select('tipo_processo_id',$tipoProcesso, null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status_processo_id', 'Status/Andamento do Processo:') !!}
                    {!! Form::select('status_processo_id',$statusProcesso, null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('objeto', 'Objeto:') !!}
                {!! Form::textarea('objeto', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Compra', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>


@endsection()