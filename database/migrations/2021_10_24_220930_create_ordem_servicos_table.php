<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('numero_projeto_id');
            $table->foreignId('empreiteiro_id');
            $table->date('inicio')->nullable();
            $table->date('termino')->nullable();
            $table->longText('observacao')->nullable();
            $table->decimal('preco_total', 10,2)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('numero_projeto_id')->references('id')->on('projetos');
            $table->foreign('empreiteiro_id')->references('id')->on('empreiteiros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servicos');
    }
}
