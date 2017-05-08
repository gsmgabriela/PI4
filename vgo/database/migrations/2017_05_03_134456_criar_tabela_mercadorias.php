<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMercadorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercadorias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('codigobarras', 13)->nullable();
            $table->string('notafiscal', 6)->nullable();
            $table->string('destino', 255)->nullable();

            $table->integer('cliente_id')->unsigned();
            $table->integer('veiculo_id')->unsigned();

            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');
            $table->foreign('veiculo_id')
                ->references('id')
                ->on('veiculos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mercadorias');
    }
}
