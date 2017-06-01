<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rotas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 60);
            $table->string('descricao', 400);
            $table->binary('img1')->nullable();
            $table->binary('img2')->nullable();

            $table->integer('locais_id')->unsigned();

            $table->foreign('locais_id')->references('id')->on('pontoEncontro');


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
        Schema::dropIfExists('rotas');
    }
}
