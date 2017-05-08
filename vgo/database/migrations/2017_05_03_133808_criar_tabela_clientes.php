<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('razao', 255);
            $table->string('nome_fantasia', 255)->nullable();
            $table->string('cnpj', 14)->unique()->index();
            $table->string('email', 255);
            $table->tinyInteger('idade')->nullable();
            $table->dateTime('fundacao')->nullable();
            $table->timestamp('ultimacompra')->nullable();
            $table->binary('logomarca')->nullable();
            $table->json('documentos')->nullable();
            $table->boolean('ativo')->default(false);
            $table->text('obs')->nullable();
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
