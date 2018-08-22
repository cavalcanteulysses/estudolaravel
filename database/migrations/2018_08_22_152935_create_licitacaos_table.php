<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_entrada');
            $table->longText('objeto');
            $table->integer('modalidade_id')->unsigned();
            $table->foreign('modalidade_id')->references('id')->on('modalidades');
            $table->bigInteger('numero_processo');
            $table->bigInteger('numero_processo_adm');
            $table->date('data_conclusao');
            $table->boolean('publicado');
            $table->date('data_abertura');
            $table->time('hora_abertura');
            $table->float('valor_disponivel', 9,2);
            $table->date('data_montagem');
            $table->float('valor_fechado', 9,2);
            $table->date('data_execucao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licitacaos');
    }
}
