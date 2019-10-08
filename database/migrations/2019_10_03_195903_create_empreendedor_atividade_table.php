<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendedorAtividadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendedor_atividade', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('empreendedor_id');
            $table->unsignedBigInteger('atividade_id');
            $table->foreign('empreendedor_id')->references('id')->on('empreendedors');
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
        Schema::dropIfExists('empreendedor_atividade');
    }
}
