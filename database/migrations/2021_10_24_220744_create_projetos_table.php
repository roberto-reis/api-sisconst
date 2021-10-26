<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_projeto', 50)->index();
            $table->foreignId('estacao_id');
            $table->foreignId('cliente_id')->index();
            $table->foreignId('tipo_servico_id');
            $table->date('data_oe')->nullable();
            $table->string('numero_oe', 50)->nullable();
            $table->string('endereco', 100);
            $table->string('bairro', 50);
            $table->string('municipio', 50);
            $table->char('uf', 2);
            $table->string('pedido_compra', 50)->nullable();
            $table->text('descricao_servico')->nullable();
            $table->date('inicio_previsto')->nullable();
            $table->date('termino_previsto')->nullable();
            $table->char('classe_servico', 1)->nullable();
            $table->decimal('preco_urs', 10, 2)->nullable();
            $table->decimal('preco_projetado', 10, 2)->nullable();
            $table->decimal('comprimento_galeria', 10,2)->nullable();
            $table->timestamps();

            $table->foreign('estacao_id')->references('id')->on('estacoes');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('tipo_servico_id')->references('id')->on('projeto_tipos_servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
