<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcesTiposServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aces_tipos_servicos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_mara', 20);
            $table->string('descricao', 100);
            $table->char('un', 2);
            $table->char('classe_mao_obra', 2);
            $table->decimal('preco', 10,2);
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
        Schema::dropIfExists('aces_tipos_servicos');
    }
}
