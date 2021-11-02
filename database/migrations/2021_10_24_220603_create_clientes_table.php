<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('contrato', 50);
            $table->string('rasao_social', 100);
            $table->char('cnpj', 14)->index();
            $table->string('endereco', 100);
            $table->string('bairro', 50);
            $table->string('municipio', 50);
            $table->char('uf', 2);
            $table->integer('inscricao_municipal')->nullable();
            $table->integer('inscricao_estadual')->nullable();
            $table->char('classe_servico', 1)->nullable();
            $table->decimal('valor_urs', 10,2)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
