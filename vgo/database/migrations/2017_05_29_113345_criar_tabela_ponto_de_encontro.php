<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPontoDeEncontro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ponto_de_encontro', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 60)->nullable();
            $table->string('descricao', 80)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ponto_de_encontro');
    }
}
