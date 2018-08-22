@extends('app')

@section('content')

    
        <h2>Cadastro de Novo Processo</h2>
        <hr>
        @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url'=>'licitacoes/store']) !!}
            <div class="form-row">
                <div class="form-group col">
                    {!! Form::label('data_entrada', 'Data de Entrada:') !!}
                    {!! Form::date('data_entrada', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('modalidade_id', 'Modalidade:') !!}
                    {!! Form::select('modalidade_id',$modalidade, null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('numero_processo', 'Numero do Processo:') !!}
                    {!! Form::number('numero_processo', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('numero_processo_adm', 'Numero do Processo Adm:') !!}
                    {!! Form::number('numero_processo_adm', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    {!! Form::label('data_conclusao', 'Data de Conclusão:') !!}
                    {!! Form::date('data_conclusao', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('publicado', 'Publicado:') !!}
                    {!! Form::select('publicado',[1 => 'Sim',0 => 'Não',], null, ['placeholder' => 'Selecione...','class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('data_abertura', 'Data de Abertura:') !!}
                    {!! Form::date('data_abertura', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('hora_abertura', 'Hora de Abertura:') !!}
                    {!! Form::time('hora_abertura', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    {!! Form::label('valor_disponivel', 'Valor Disponível:') !!}
                    {!! Form::number('valor_disponivel', null, ['class'=>'form-control','step'=>0.01]) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('data_montagem', 'Data de Montagem:') !!}
                    {!! Form::date('data_montagem', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('valor_fechado', 'Valor Fechado:') !!}
                    {!! Form::number('valor_fechado', null, ['class'=>'form-control','step'=>0.01]) !!}
                </div>
                <div class="form-group col">
                    {!! Form::label('data_execucao', 'Data de Execução:') !!}
                    {!! Form::date('data_execucao', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('objeto', 'Objeto:') !!}
                {!! Form::textarea('objeto', null, ['class'=>'form-control','rows'=> 4]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Novo Processo', ['class'=>'btn btn-primary']) !!}
                <a class="btn btn-danger" href="/licitacoes" title="Cancelar">Cancelar cadastro</a>
            </div>

        {!! Form::close() !!}

   
@endsection()