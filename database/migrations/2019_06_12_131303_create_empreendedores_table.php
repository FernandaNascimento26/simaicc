<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',100);
            $table->string('sexo',50);
            $table->integer('rg');
            $table->string('cpf',50);
            $table->string('dt_nasc',50);
            $table->unsignedBigInteger('secretaria_id');
            $table->string('rua',50);
            $table->string('numero',20);
            $table->string('bairro',50);
            $table->string('cidade',50);
            $table->string('estado',50);
            $table->string('cep',50);
            $table->string('telefone',50);
            $table->string('escolaridade',50);
            $table->unsignedBigInteger('atividade_id');
            $table->string('trabalha_informal',20);
            $table->float('ganho_mensal');
            $table->string('formacao_atividade');
            $table->foreign('secretaria_id')->references('id')->on('secretarias');
            $table->foreign('atividade_id')->references('id')->on('atividades');
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
        Schema::dropIfExists('empreendedores');
    }
}
