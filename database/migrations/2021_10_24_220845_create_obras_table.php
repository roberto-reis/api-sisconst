<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('numero_projeto_id')->index();
            $table->foreignId('empreiteiro_id')->index();
            $table->foreignId('status_obra_id')->index();
            $table->date('inicio_real')->nullable();
            $table->date('termino_real')->nullable();
            $table->date('fotos_emergencia')->nullable();
            $table->date('fotos_anexo_xiii')->nullable();
            $table->string('fiscal_cliente', 100)->nullable();
            $table->longText('observacao')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('numero_projeto_id')->references('id')->on('projetos');
            $table->foreign('empreiteiro_id')->references('id')->on('empreiteiros');
            $table->foreign('status_obra_id')->references('id')->on('status_obras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
