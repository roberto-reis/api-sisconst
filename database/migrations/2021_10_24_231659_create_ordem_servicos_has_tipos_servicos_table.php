<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicosHasTiposServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_servicos_has_tipos_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordem_servicos_id');
            $table->foreignId('os_tipo_servico_id');
            $table->decimal('quantidade', 10,2);
            $table->decimal('preco', 10,2);
            $table->timestamps();

            $table->foreign('ordem_servicos_id')->references('id')->on('ordem_servicos')->onDelete('cascade');
            $table->foreign('os_tipo_servico_id')->references('id')->on('os_tipo_servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordem_servicos_has_tipos_servicos');
    }
}
