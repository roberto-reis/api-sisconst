<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('numero_projeto_id');
            $table->string('tipo_medicao', 50);
            $table->longText('observacao')->nullable();
            $table->decimal('preco_total', 10,2)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('numero_projeto_id')->references('id')->on('projetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aces');
    }
}
