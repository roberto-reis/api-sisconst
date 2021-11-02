<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcesHasTiposServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aces_has_tipos_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ace_id');
            $table->foreignId('ace_servico_id');
            $table->decimal('quantidade', 10,2);
            $table->decimal('preco', 10,2);
            $table->timestamps();

            $table->foreign('ace_id')->references('id')->on('aces')->onDelete('cascade');
            $table->foreign('ace_servico_id')->references('id')->on('aces_tipos_servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aces_has_tipos_servicos');
    }
}
