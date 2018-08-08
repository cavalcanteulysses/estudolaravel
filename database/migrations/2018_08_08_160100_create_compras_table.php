<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('numero');
            $table->date('data_protocolo');
            $table->longText('objeto');
            $table->integer('tipo_documento_id')->unsigned();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->integer('local_origem_id')->unsigned();
            $table->foreign('local_origem_id')->references('id')->on('locals');
            $table->integer('tipo_processo_id')->unsigned();
            $table->foreign('tipo_processo_id')->references('id')->on('tipo_processos');
            $table->integer('status_processo_id')->unsigned();
            $table->foreign('status_processo_id')->references('id')->on('status_processos');
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
        Schema::dropIfExists('compras');
    }
}
