<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPredio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('predio', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 60)->nullable();
            $table->string('descricao', 80)->nullable();

            $table->integer('ponto_de_encontro_id')->unsigned();

            $table->foreign('ponto_de_encontro_id')->references('id')->on('ponto_de_encontro');


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
        Schema::dropIfExists('predio');
    }
}
