@extends('app')

@section('content')

 <h2>Alteração de Processo</h2>
        <hr>
        @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url'=>"compras/$compra->id/update",'method'=>'put']) !!}
            <div class="form-row">
                <div class="form-group col">
                    {!! Form::label('numero', 'Numero do Documento:') !!}
                    {!! Form::number('numero', $compra->numero, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col">
                    {!! Form::label('data_protocolo', 'Data de Protocolo na ADM:') !!}
                    {!! Form::date('data_protocolo', $compra->data_protocolo, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col">
                    {!! Form::label('tipo_documento_id', 'Tipo de Documento:') !!}
                    {!! Form::select('tipo_documento_id',$tipoDocumento, $compra->tipo_documento_id, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('local_origem_id', 'Local de Origem:') !!}
                    {!! Form::select('local_origem_id',$local, $compra->local_origem_id, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    {!! Form::label('tipo_processo_id', 'Tipo de Processo:') !!}
                    {!! Form::select('tipo_processo_id',$tipoProcesso, $compra->tipo_processo_id, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('status_processo_id', 'Status/Andamento do Processo:') !!}
                    {!! Form::select('status_processo_id',$statusProcesso, $compra->tipo_processo_id, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('objeto', 'Objeto:') !!}
                {!! Form::textarea('objeto', $compra->objeto, ['class'=>'form-control','rows'=> 4]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Alterações no Processo', ['class'=>'btn btn-primary']) !!}
                <a class="btn btn-danger" href="/compras" title="Cancelar">Cancelar Alterações</a>
            </div>

        {!! Form::close() !!}


    @endsection()